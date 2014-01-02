<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrixCroisiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\PrixCroisiereRepository")
 */
class PrixCroisiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Prixintitial", type="string", length=255)
     */
    private $prixintitial;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixPromo", type="string", length=255)
     */
    private $prixPromo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prixintitial
     *
     * @param string $prixintitial
     * @return PrixCroisiere
     */
    public function setPrixintitial($prixintitial)
    {
        $this->prixintitial = $prixintitial;
    
        return $this;
    }

    /**
     * Get prixintitial
     *
     * @return string 
     */
    public function getPrixintitial()
    {
        return $this->prixintitial;
    }

    /**
     * Set prixPromo
     *
     * @param string $prixPromo
     * @return PrixCroisiere
     */
    public function setPrixPromo($prixPromo)
    {
        $this->prixPromo = $prixPromo;
    
        return $this;
    }

    /**
     * Get prixPromo
     *
     * @return string 
     */
    public function getPrixPromo()
    {
        return $this->prixPromo;
    }
}