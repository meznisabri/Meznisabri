<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CroisiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EscaleRepository extends EntityRepository
{
    
    public function findByIdJoinedToCroisiere($idCroisiere)
{
            $qb = $this->createQueryBuilder('a');
            $qb->where('a.Croisiere = :Croisiere')
              ->setParameter('Croisiere', $idCroisiere);
            return $qb->getQuery()
                      ->getResult(); 
}
    

}