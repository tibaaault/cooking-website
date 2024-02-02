<?php

namespace App\Controller;

use App\Entity\Favorites;
use App\Entity\Recette;
use App\Repository\FavoritesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/add/favorite', name: 'addFavorite', methods: ['POST'])]
    public function setFavorite(Request $request, FavoritesRepository $favoritesRepository, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage): Response
    {
        $id_recette = $request->request->get('id_recette');

        $favorite = new Favorites();
        $favorite->setIdUser($tokenStorage->getToken()->getUser());
        $favorite->setIdRecette($entityManager->getRepository(Recette::class)->find($id_recette));
        $entityManager->persist($favorite);
        $entityManager->flush();


        return $this->redirectToRoute('showRecette', ['id' => $id_recette]);
    }

    #[Route('/user/remove/favorite', name: 'removeFavorite', methods: ['POST'])]
    public function removeFavorite(Request $request, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage): Response
    {
        $id_recette = $request->request->get('id_recette');

        $user = $tokenStorage->getToken()->getUser();
        $favorite = $entityManager->getRepository(Favorites::class)->findOneBy(['id_user' => $user, 'id_recette' => $id_recette]);
        $entityManager->remove($favorite);
        $entityManager->flush();

        return $this->redirectToRoute('showRecette', ['id' => $id_recette]);
    }

    #[Route('/user/favorites', name: 'favorites')]
    public function getFavorites(EntityManagerInterface $entityManager, FavoritesRepository $favoritesRepository, TokenStorageInterface $tokenStorage): Response
    {

        $user = $tokenStorage->getToken()->getUser();
        $favorites = $entityManager->getRepository(Favorites::class)->findAllByUserID(['id_user' => $user]);



        return $this->render('user/favorites.html.twig', [
            'favorites' => $favorites,
        ]);
    }
}
