<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TypeCabineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypeCabineRepository extends EntityRepository
{
    
        public function findByIdJoinedToBateau($idBateau)
{
              $qb = $this->createQueryBuilder('a')
             ->leftJoin('a.id', 'id')
             ->addSelect('id');
             return $qb->getQuery()
                       ->getResult();

}

}
