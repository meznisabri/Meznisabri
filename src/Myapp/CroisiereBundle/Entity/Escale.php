<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Escale
 *
 * @ORM\Table()
* @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\EscaleRepository")
 */
class Escale
{
    
       /**
   * @var integer
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\Croisiere")
   * @ORM\JoinColumn(nullable=false)
   */
  private $Croisiere;
    
    
    
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
     * @ORM\Column(name="nomPort", type="string", length=255)
     */
    private $nomPort;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutEscale", type="date")
     */
    private $dateDebutEscale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutEscale", type="time")
     */
    private $heureDebutEscale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinEscale", type="date")
     */
    private $dateFinEscale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinEscale", type="time")
     */
    private $heureFinEscale;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $photo;


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
     * Set nomPort
     *
     * @param string $nomPort
     * @return Escale
     */
    public function setNomPort($nomPort)
    {
        $this->nomPort = $nomPort;
    
        return $this;
    }

    /**
     * Get nomPort
     *
     * @return string 
     */
    public function getNomPort()
    {
        return $this->nomPort;
    }

    /**
     * Set dateDebutEscale
     *
     * @param \DateTime $dateDebutEscale
     * @return Escale
     */
    public function setDateDebutEscale($dateDebutEscale)
    {
        $this->dateDebutEscale = $dateDebutEscale;
    
        return $this;
    }

    /**
     * Get dateDebutEscale
     *
     * @return \DateTime 
     */
    public function getDateDebutEscale()
    {
        return $this->dateDebutEscale;
    }

    /**
     * Set heureDebutEscale
     *
     * @param \DateTime $heureDebutEscale
     * @return Escale
     */
    public function setHeureDebutEscale($heureDebutEscale)
    {
        $this->heureDebutEscale = $heureDebutEscale;
    
        return $this;
    }

    /**
     * Get heureDebutEscale
     *
     * @return \DateTime 
     */
    public function getHeureDebutEscale()
    {
        return $this->heureDebutEscale;
    }

    /**
     * Set dateFinEscale
     *
     * @param \DateTime $dateFinEscale
     * @return Escale
     */
    public function setDateFinEscale($dateFinEscale)
    {
        $this->dateFinEscale = $dateFinEscale;
    
        return $this;
    }

    /**
     * Get dateFinEscale
     *
     * @return \DateTime 
     */
    public function getDateFinEscale()
    {
        return $this->dateFinEscale;
    }

    /**
     * Set heureFinEscale
     *
     * @param \DateTime $heureFinEscale
     * @return Escale
     */
    public function setHeureFinEscale($heureFinEscale)
    {
        $this->heureFinEscale = $heureFinEscale;
    
        return $this;
    }

    /**
     * Get heureFinEscale
     *
     * @return \DateTime 
     */
    public function getHeureFinEscale()
    {
        return $this->heureFinEscale;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Escale
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
     * Set photo
     *
     * @param string $photo
     * @return Escale
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set Croisiere
     *
     * @param \Myapp\CroisiereBundle\Entity\Croisiere $croisiere
     * @return Escale
     */
    public function setCroisiere(\Myapp\CroisiereBundle\Entity\Croisiere $croisiere)
    {
        $this->Croisiere = $croisiere;
    
        return $this;
    }

    /**
     * Get Croisiere
     *
     * @return \Myapp\CroisiereBundle\Entity\Croisiere 
     */
    public function getCroisiere()
    {
        return $this->Croisiere;
    }
}