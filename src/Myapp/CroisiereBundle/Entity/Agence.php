<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\AgenceRepository")
 */
class Agence
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
     * @ORM\Column(name="nomAgence", type="string", length=255)
     */
    private $nomAgence;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

       /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $Adresse;
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $Email;
      /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255)
     */
    private $Tel;
        /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=255)
     */
    private $Fax;
    
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
     * Set nomAgence
     *
     * @param string $nomAgence
     * @return Agence
     */
    public function setNomAgence($nomAgence)
    {
        $this->nomAgence = $nomAgence;
    
        return $this;
    }

    /**
     * Get nomAgence
     *
     * @return string 
     */
    public function getNomAgence()
    {
        return $this->nomAgence;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Agence
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
     * Set Adresse
     *
     * @param string $adresse
     * @return Agence
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;
    
        return $this;
    }

    /**
     * Get Adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return Agence
     */
    public function setEmail($email)
    {
        $this->Email = $email;
    
        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Tel
     *
     * @param string $tel
     * @return Agence
     */
    public function setTel($tel)
    {
        $this->Tel = $tel;
    
        return $this;
    }

    /**
     * Get Tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * Set Fax
     *
     * @param string $fax
     * @return Agence
     */
    public function setFax($fax)
    {
        $this->Fax = $fax;
    
        return $this;
    }

    /**
     * Get Fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->Fax;
    }
}