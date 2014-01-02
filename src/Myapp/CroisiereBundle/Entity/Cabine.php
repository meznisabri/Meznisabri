<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\CabineRepository")
 */
class Cabine
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
     * @ORM\Column(name="nomCabine", type="string", length=255)
     */
    private $nomCabine;


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
     * Set nomCabine
     *
     * @param string $nomCabine
     * @return Cabine
     */
    public function setNomCabine($nomCabine)
    {
        $this->nomCabine = $nomCabine;
    
        return $this;
    }

    /**
     * Get nomCabine
     *
     * @return string 
     */
    public function getNomCabine()
    {
        return $this->nomCabine;
    }


}