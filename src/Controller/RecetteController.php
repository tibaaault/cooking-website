<?php

namespace App\Controller;

// Ajoutez cette ligne en haut de votre fichier pour inclure la classe Security
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\Recette;
use App\Entity\Ingredient;
use App\Entity\Step;
use App\Entity\IngredientRecette;
use App\Form\AddRecipeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\RecetteRepository;
use Doctrine\Common\Collections\ArrayCollection;


class RecetteController extends AbstractController
{
    #[Route('/recette', name: 'app_recette')]
    public function index(): Response
    {
        return $this->render('recette/index.html.twig', [
            'controller_name' => 'RecetteController',
        ]);
    }

    #[Route('/recipe/new', name: 'new_recipe')]
    public function createNewRecipe(Request $request, EntityManagerInterface $entityManager, RecetteRepository $recetteRepository, TokenStorageInterface $tokenStorage): Response
    {
        $recipe = new Recette();
        $form = $this->createForm(AddRecipeFormType::class, $recipe, ['attr' => ['class' => 'customForm']]);
        // Obtenez l'utilisateur actuellement authentifié
        $user = $tokenStorage->getToken()->getUser();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('img')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            }

            $data = $form->getData();
            $data->setImg($newFilename);
            $data->setUser($user);
            $entityManager->persist($data);
            $entityManager->flush();
            $idRecette = $data->getId();


            $formData = $request->request->all();
            for ($i = 1; isset($formData['ingredient' . $i]); $i++) {
                $ingredient = [
                    'name' => $formData['ingredient' . $i],
                    'quantity' => $formData['qqt' . $i],
                ];
                $ingredients[] = $ingredient;
            }

            foreach ($ingredients as $ingredient) {
                if ($entityManager->getRepository(Ingredient::class)->findOneBy(['name' => $ingredient['name']]) === null) {
                    $newIngredient = new Ingredient();
                    $newIngredient->setName($ingredient['name']);
                    $entityManager->persist($newIngredient);
                    $entityManager->flush();
                } else {
                    $newIngredient = $entityManager->getRepository(Ingredient::class)->findOneBy(['name' => $ingredient['name']]);
                }

                //            Add ingredients to the RecipeIngredient table
                $newRecipeIngredient = new IngredientRecette();
                $newRecipeIngredient->setRecette($entityManager->getRepository(Recette::class)->find($idRecette));
                $newRecipeIngredient->setIngredient($newIngredient);
                $newRecipeIngredient->setQuantity($ingredient['quantity']);
                $entityManager->persist($newRecipeIngredient);
                $entityManager->flush();
            }

            //Get all steps from the form
            $formData = $request->request->all();
            for ($i = 1; isset($formData['step' . $i]); $i++) {
                $step = [
                    'description' => $formData['step' . $i],
                    'order' => $i,
                ];
                $steps[] = $step;
            }


            foreach ($steps as $step) {
                $newStep = new Step();
                $newStep->setIdRecette($entityManager->getRepository(Recette::class)->find($idRecette));
                $newStep->setDetail($step['description']);
                $newStep->setStep($step['order']);
                $entityManager->persist($newStep);
                $entityManager->flush();
            }


            return $this->redirectToRoute('default_index');
        } else {
            return $this->render('recette/newRecipe.html.twig', [
                'addRecipeForm' => $form->createView(),
            ]);
        }
    }


    #[Route('/recipe/add', name: 'add_recipe', methods: ['POST'])]
    public function addNewRecipe(Recette $recipe): Response
    {
        $this->addFlash('success', 'Votre recette a bien été ajoutée !');

        return $this->render('recette/newRecipe.html.twig', [
            'recipe' => $recipe,
        ]);
    }

    #[Route('/recipe/user', name: 'userRecipe')]
    public function getUserRecipes(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage): Response
    {
        $user = $tokenStorage->getToken()->getUser();
        $recipes = $entityManager->getRepository(Recette::class)->findBy(['user' => $user]);

        return $this->render('recette/userRecipe.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    #[Route('/recipe/delete', name: 'deleteRecette')]
    public function deleteRecipe(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id_recette = $request->request->get('id_recette');    
        $recipe = $entityManager->getRepository(Recette::class)->findOneBy(['id' => $id_recette]);
        if (!$this->canAccessRecipe($recipe)){
            return $this->redirectToRoute('default_index');
        }
        
        // Vérifiez si la recette existe
        if (!$recipe) {
            throw $this->createNotFoundException('La recette avec l\'ID ' . $id_recette . ' n\'existe pas.');
        }
        $entityManager->remove($recipe);
        $entityManager->flush();

        return $this->redirectToRoute('userRecipe');
    }



    #[Route('/recipe/edit/{id}', name: 'editRecette', methods: ['Get', 'POST'])]
    public function editRecipe(Request $request, EntityManagerInterface $entityManager, Recette $recipe): Response
    {
        if (!$this->canAccessRecipe($recipe)){
            return $this->redirectToRoute('default_index');
        }

        // Obtenez les ingrédients et les étapes actuels de la recette
        $currentIngredients = new ArrayCollection($recipe->getIngredientsRecette()->getValues());
        $currentSteps = new ArrayCollection($recipe->getSteps()->getValues());


        $form = $this->createForm(AddRecipeFormType::class, $recipe, ['attr' => ['class' => 'customForm']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traitement du formulaire pour les nouvelles données
            // Access id_recette from the form data
            $idRecette = $request->request->get('id_recette');
            $imageFile = $form->get('img')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } else {
                $newFilename = $recipe->getImg();
            }

            $data = $form->getData();
            $data->setImg($newFilename);
            $data->setUser($this->getUser());
            $entityManager->persist($data);
            $entityManager->flush();
            $idRecette = $data->getId();


            $formData = $request->request->all();
            for ($i = 1; isset($formData['ingredient' . $i]); $i++) {
                $ingredient = [
                    'name' => $formData['ingredient' . $i],
                    'quantity' => $formData['qqt' . $i],
                ];
                $ingredients[] = $ingredient;
            }



            // Supprimez les ingrédients actuels de la recette
            foreach ($currentIngredients as $ingredient) {
                $ingredientToRemove = $entityManager->getRepository(IngredientRecette::class)->find($ingredient->getId());
                $recipe->removeIngredientsRecette($ingredientToRemove);
                $entityManager->remove($ingredientToRemove);
            }

            // Supprimez les étapes actuelles de la recette
            foreach ($currentSteps as $step) {
                $stepToRemove = $entityManager->getRepository(Step::class)->find($step->getId());
                $recipe->removeStep($stepToRemove);
                $entityManager->remove($stepToRemove);
            }

            foreach ($ingredients as $ingredient) {
                if ($entityManager->getRepository(Ingredient::class)->findOneBy(['name' => $ingredient['name']]) === null) {
                    $newIngredient = new Ingredient();
                    $newIngredient->setName($ingredient['name']);
                    $entityManager->persist($newIngredient);
                    $entityManager->flush();
                } else {
                    $newIngredient = $entityManager->getRepository(Ingredient::class)->findOneBy(['name' => $ingredient['name']]);
                }

                //            Add ingredients to the RecipeIngredient table
                $newRecipeIngredient = new IngredientRecette();
                $newRecipeIngredient->setRecette($entityManager->getRepository(Recette::class)->find($idRecette));
                $newRecipeIngredient->setIngredient($newIngredient);
                $newRecipeIngredient->setQuantity($ingredient['quantity']);
                $entityManager->persist($newRecipeIngredient);
                $entityManager->flush();
            }

            //Get all steps from the form
            $formData = $request->request->all();
            for ($i = 1; isset($formData['step' . $i]); $i++) {
                $step = [
                    'description' => $formData['step' . $i],
                    'order' => $i,
                ];
                $steps[] = $step;
            }


            foreach ($steps as $step) {
                $newStep = new Step();
                $newStep->setIdRecette($entityManager->getRepository(Recette::class)->find($idRecette));
                $newStep->setDetail($step['description']);
                $newStep->setStep($step['order']);
                $entityManager->persist($newStep);
                $entityManager->flush();
            }



            // // Enregistrez les modifications dans la base de données
            $entityManager->flush();

            $this->addFlash('success', 'La recette a été modifiée avec succès.');

            return $this->redirectToRoute('userRecipe');
        }
        return $this->render('recette/editRecipe.html.twig', [
            'editRecipeForm' => $form->createView(),
            'recipe' => $recipe,
        ]);
    }

    public function canAccessRecipe(Recette $recipe): bool
    {
        $user = $this->getUser();
        if ($recipe->getUser() === $user) {
            return true;
        }
        return false;
    }
}
