<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCabine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\TypeCabineRepository")
 */
class TypeCabine
{
        
           /**
     * @var boolean
     *
     * @ORM\Column(name="Affichable", type="boolean")
     */
    private $Affichable;
     /**
   * @var integer
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\Cabine")
   * @ORM\JoinColumn(nullable=false)
   */
    
      private $Cabine;
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
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="nbrPlace", type="string", length=255)
     */
    private $nbrPlace;

  

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;


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
     * Set nature
     *
     * @param string $nature
     * @return TypeCabine
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    
        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set nbrPlace
     *
     * @param string $nbrPlace
     * @return TypeCabine
     */
    public function setNbrPlace($nbrPlace)
    {
        $this->nbrPlace = $nbrPlace;
    
        return $this;
    }

    /**
     * Get nbrPlace
     *
     * @return string 
     */
    public function getNbrPlace()
    {
        return $this->nbrPlace;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return TypeCabine
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TypeCabine
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Cabine
     *
     * @param \Myapp\CroisiereBundle\Entity\Cabine $cabine
     * @return TypeCabine
     */
    public function setCabine(\Myapp\CroisiereBundle\Entity\Cabine $cabine)
    {
        $this->Cabine = $cabine;
    
        return $this;
    }

    /**
     * Get Cabine
     *
     * @return \Myapp\CroisiereBundle\Entity\Cabine 
     */
    public function getCabine()
    {
        return $this->Cabine;
    }
    
   

    

    /**
     * Set Affichable
     *
     * @param boolean $affichable
     * @return TypeCabine
     */
    public function setAffichable($affichable)
    {
        $this->Affichable = $affichable;
    
        return $this;
    }

    /**
     * Get Affichable
     *
     * @return boolean 
     */
    public function getAffichable()
    {
        return $this->Affichable;
    }
}