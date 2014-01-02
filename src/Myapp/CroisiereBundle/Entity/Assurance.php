<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\AssuranceRepository")
 */
class Assurance
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
     * @ORM\Column(name="TypeAssurance", type="string", length=255)
     */
    private $typeAssurance;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Montant", type="string", length=255)
     */
    private $montant;


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
     * Set typeAssurance
     *
     * @param string $typeAssurance
     * @return Assurance
     */
    public function setTypeAssurance($typeAssurance)
    {
        $this->typeAssurance = $typeAssurance;
    
        return $this;
    }

    /**
     * Get typeAssurance
     *
     * @return string 
     */
    public function getTypeAssurance()
    {
        return $this->typeAssurance;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Assurance
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
     * Set montant
     *
     * @param string $montant
     * @return Assurance
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }
}