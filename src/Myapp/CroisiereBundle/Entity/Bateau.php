<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\BateauRepository")
 */



class Bateau
{
   
  
  
    
    
    
     /**
   * @var integer
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\Agence")
   * @ORM\JoinColumn(nullable=false)
   */
  private $agence;
  
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
     * @ORM\Column(name="nomBateau", type="string", length=255)
     */
    private $nomBateau;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Affichable", type="boolean")
     */
    private $Affichable;

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="typeBateau", type="string", length=255)
     */
    private $typeBateau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnservie", type="date")
     */
    private $dateEnservie;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrePassange", type="string", length=255)
     */
    private $nombrePassange;

    /**
     * @var string
     *
     * @ORM\Column(name="tonnage", type="string", length=255)
     */
    private $tonnage;

    /**
     * @var string
     *
     * @ORM\Column(name="longeur", type="string", length=255)
     */
    private $longeur;

    /**
     * @var string
     *
     * @ORM\Column(name="largeur", type="string", length=255)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="vitesse", type="string", length=255)
     */
    private $vitesse;


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
     * Set nomBateau
     *
     * @param string $nomBateau
     * @return Bateau
     */
    public function setNomBateau($nomBateau)
    {
        $this->nomBateau = $nomBateau;
    
        return $this;
    }

    /**
     * Get nomBateau
     *
     * @return string 
     */
    public function getNomBateau()
    {
        return $this->nomBateau;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Bateau
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set typeBateau
     *
     * @param string $typeBateau
     * @return Bateau
     */
    public function setTypeBateau($typeBateau)
    {
        $this->typeBateau = $typeBateau;
    
        return $this;
    }

    /**
     * Get typeBateau
     *
     * @return string 
     */
    public function getTypeBateau()
    {
        return $this->typeBateau;
    }

    /**
     * Set dateEnservie
     *
     * @param \DateTime $dateEnservie
     * @return Bateau
     */
    public function setDateEnservie($dateEnservie)
    {
        $this->dateEnservie = $dateEnservie;
    
        return $this;
    }

    /**
     * Get dateEnservie
     *
     * @return \DateTime 
     */
    public function getDateEnservie()
    {
        return $this->dateEnservie;
    }

    /**
     * Set nombrePassange
     *
     * @param string $nombrePassange
     * @return Bateau
     */
    public function setNombrePassange($nombrePassange)
    {
        $this->nombrePassange = $nombrePassange;
    
        return $this;
    }

    /**
     * Get nombrePassange
     *
     * @return string 
     */
    public function getNombrePassange()
    {
        return $this->nombrePassange;
    }

    /**
     * Set tonnage
     *
     * @param string $tonnage
     * @return Bateau
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;
    
        return $this;
    }

    /**
     * Get tonnage
     *
     * @return string 
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }

    /**
     * Set longeur
     *
     * @param string $longeur
     * @return Bateau
     */
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;
    
        return $this;
    }

    /**
     * Get longeur
     *
     * @return string 
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     * @return Bateau
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    
        return $this;
    }

    /**
     * Get largeur
     *
     * @return string 
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set vitesse
     *
     * @param string $vitesse
     * @return Bateau
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    
        return $this;
    }

    /**
     * Get vitesse
     *
     * @return string 
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }



    /**
     * Set agence
     *
     * @param \Myapp\CroisiereBundle\Entity\Agence $agence
     * @return Bateau
     */
    public function setAgence(\Myapp\CroisiereBundle\Entity\Agence $agence = null)
    {
        $this->agence = $agence;
    
        return $this;
    }
    

    /**
     * Get agence
     *
     * @return \Myapp\CroisiereBundle\Entity\Agence 
     */
    public function getAgence()
    {
        return $this->agence;
    }
    
    
 
    
    
 
   

    /**
     * Set Affichable
     *
     * @param boolean $affichable
     * @return Bateau
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