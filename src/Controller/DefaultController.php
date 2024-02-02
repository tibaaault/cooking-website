<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\Favorites;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class DefaultController extends AbstractController
{
    #[Route('/', name: "default_index", methods: ['GET'])]
    public function index(RecetteRepository $recetteRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'recettes' => $recetteRepository->findAll(),
        ]); 

    }

    #[Route('/recette/{id}', name: "showRecette", methods: ['GET'])]
    public function displayOne(RecetteRepository $recetteRepository, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage, $id): Response
    {
        $recette = $recetteRepository->find($id);
        $favorite = $entityManager->getRepository(Favorites::class)->findOneBy(['id_user' => $this->getUser(), 'id_recette' => $id]);

        if (!$recette) {
            throw $this->createNotFoundException('La recette n\'existe pas');
        }
    
        // Charge les détails de l'entité intermédiaire IngredientRecette associée à la recette
        $ingredientRecettes = $recette->getIngredientsRecette();
    
        return $this->render('recette/showRecette.html.twig', [
            'recettes' => $recette,
            'ingredientRecettes' => $ingredientRecettes,
            'favorite' => $favorite,
        ]);
    }
    
  
}
