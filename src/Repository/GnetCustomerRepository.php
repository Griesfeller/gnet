<?php

namespace App\Repository;

use App\Entity\GnetCustomer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GnetCustomer|null find($id, $lockMode = null, $lockVersion = null)
 * @method GnetCustomer|null findOneBy(array $criteria, array $orderBy = null)
 * @method GnetCustomer[]    findAll()
 * @method GnetCustomer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GnetCustomerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GnetCustomer::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('g')
            ->where('g.something = :value')->setParameter('value', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
