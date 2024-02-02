<?php

namespace App\Repository;

use App\Entity\Favorites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Favorites>
 *
 * @method Favorites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Favorites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Favorites[]    findAll()
 * @method Favorites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavoritesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favorites::class);
    }

//    /**
//     * @return Favorites[] Returns an array of Favorites objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Favorites
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

  /**
     * Récupère toutes les recettes favorites d'un utilisateur par son ID.
     *
     * @param int $id_user L'ID de l'utilisateur
     * @return Favorites[]|null Un tableau de toutes les recettes favorites de l'utilisateur
     */
    public function findAllByUserID($id_user): ?array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.id_user = :id_user')
            ->setParameter('id_user', $id_user)
            ->getQuery()
            ->getResult();
    }
}
