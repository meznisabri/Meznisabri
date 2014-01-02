<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\PaiementRepository")
 */
class Paiement
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
     * @ORM\Column(name="NomTitulaireDecarte", type="string", length=255)
     */
    private $nomTitulaireDecarte;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroCarte", type="string", length=255)
     */
    private $numeroCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="Cryptogramme", type="string", length=255)
     */
    private $cryptogramme;

    /**
     * @var string
     *
     * @ORM\Column(name="TypedeCarte", type="string", length=255)
     */
    private $typedeCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="Datedexpiration", type="string", length=255)
     */
    private $datedexpiration;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDexpirationannee", type="string", length=255)
     */
    private $dateDexpirationannee;


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
     * Set nomTitulaireDecarte
     *
     * @param string $nomTitulaireDecarte
     * @return Paiement
     */
    public function setNomTitulaireDecarte($nomTitulaireDecarte)
    {
        $this->nomTitulaireDecarte = $nomTitulaireDecarte;
    
        return $this;
    }

    /**
     * Get nomTitulaireDecarte
     *
     * @return string 
     */
    public function getNomTitulaireDecarte()
    {
        return $this->nomTitulaireDecarte;
    }

    /**
     * Set numeroCarte
     *
     * @param string $numeroCarte
     * @return Paiement
     */
    public function setNumeroCarte($numeroCarte)
    {
        $this->numeroCarte = $numeroCarte;
    
        return $this;
    }

    /**
     * Get numeroCarte
     *
     * @return string 
     */
    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    /**
     * Set cryptogramme
     *
     * @param string $cryptogramme
     * @return Paiement
     */
    public function setCryptogramme($cryptogramme)
    {
        $this->cryptogramme = $cryptogramme;
    
        return $this;
    }

    /**
     * Get cryptogramme
     *
     * @return string 
     */
    public function getCryptogramme()
    {
        return $this->cryptogramme;
    }

    /**
     * Set typedeCarte
     *
     * @param string $typedeCarte
     * @return Paiement
     */
    public function setTypedeCarte($typedeCarte)
    {
        $this->typedeCarte = $typedeCarte;
    
        return $this;
    }

    /**
     * Get typedeCarte
     *
     * @return string 
     */
    public function getTypedeCarte()
    {
        return $this->typedeCarte;
    }

    /**
     * Set datedexpiration
     *
     * @param string $datedexpiration
     * @return Paiement
     */
    public function setDatedexpiration($datedexpiration)
    {
        $this->datedexpiration = $datedexpiration;
    
        return $this;
    }

    /**
     * Get datedexpiration
     *
     * @return string 
     */
    public function getDatedexpiration()
    {
        return $this->datedexpiration;
    }

    /**
     * Set dateDexpirationannee
     *
     * @param string $dateDexpirationannee
     * @return Paiement
     */
    public function setDateDexpirationannee($dateDexpirationannee)
    {
        $this->dateDexpirationannee = $dateDexpirationannee;
    
        return $this;
    }

    /**
     * Get dateDexpirationannee
     *
     * @return string 
     */
    public function getDateDexpirationannee()
    {
        return $this->dateDexpirationannee;
    }
}