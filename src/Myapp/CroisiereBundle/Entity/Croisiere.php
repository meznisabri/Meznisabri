<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Croisiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\CroisiereRepository")
 */
class Croisiere
{
       /**
     * @var boolean
     *
     * @ORM\Column(name="Affichable", type="boolean")
     */
    private $Affichable;
      /**
   * @var integer
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\Pension")
   * @ORM\JoinColumn(nullable=false)
   */
  private $Pension;

    
     
      
      /**
   * @var integer
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\Bateau")
   * @ORM\JoinColumn(nullable=false)
   */
  private $Bateau;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDepart", type="datetime")
     */
    private $dateDepart;
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDefin", type="datetime")
     */
    private $dateDefin;

    /**
     * @var string
     *
     * @ORM\Column(name="Destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="portsDedepart", type="string", length=255)
     */
    private $portsDedepart;

    /**
     * @var string
     *
     * @ORM\Column(name="PrortsDarive", type="string", length=255)
     */
    private $prortsDarive;


       /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $Description;
    
    
    
    
    
    
    
    
    
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
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     * @return Croisiere
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    
        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Croisiere
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set portsDedepart
     *
     * @param string $portsDedepart
     * @return Croisiere
     */
    public function setPortsDedepart($portsDedepart)
    {
        $this->portsDedepart = $portsDedepart;
    
        return $this;
    }

    /**
     * Get portsDedepart
     *
     * @return string 
     */
    public function getPortsDedepart()
    {
        return $this->portsDedepart;
    }

    /**
     * Set prortsDarive
     *
     * @param string $prortsDarive
     * @return Croisiere
     */
    public function setPrortsDarive($prortsDarive)
    {
        $this->prortsDarive = $prortsDarive;
    
        return $this;
    }

    /**
     * Get prortsDarive
     *
     * @return string 
     */
    public function getPrortsDarive()
    {
        return $this->prortsDarive;
    }

    /**
     * Set Bateau
     *
     * @param \Myapp\CroisiereBundle\Entity\Bateau $bateau
     * @return Croisiere
     */
    public function setBateau(\Myapp\CroisiereBundle\Entity\Bateau $bateau)
    {
        $this->Bateau = $bateau;
    
        return $this;
    }

    /**
     * Get Bateau
     *
     * @return \Myapp\CroisiereBundle\Entity\Bateau 
     */
    public function getBateau()
    {
        return $this->Bateau;
    }

    /**
     * Set dateDefin
     *
     * @param \DateTime $dateDefin
     * @return Croisiere
     */
    public function setDateDefin($dateDefin)
    {
        $this->dateDefin = $dateDefin;
    
        return $this;
    }

    /**
     * Get dateDefin
     *
     * @return \DateTime 
     */
    public function getDateDefin()
    {
        return $this->dateDefin;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return Croisiere
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set Pension
     *
     * @param \Myapp\CroisiereBundle\Entity\Pension $pension
     * @return Croisiere
     */
    public function setPension(\Myapp\CroisiereBundle\Entity\Pension $pension)
    {
        $this->Pension = $pension;
    
        return $this;
    }

    /**
     * Get Pension
     *
     * @return \Myapp\CroisiereBundle\Entity\Pension 
     */
    public function getPension()
    {
        return $this->Pension;
    }

    /**
     * Set Affichable
     *
     * @param boolean $affichable
     * @return Croisiere
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
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255)
     */
    public $file;



    /**
     * Set url
     *
     * @param string $url
     * @return imageCros
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return imageCros
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    
        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return imageCros
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }
    
    
    
    public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      return;
    }
    // On garde le nom original du fichier de l'internaute
    $name = $this->file->getClientOriginalName();
    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move($this->getUploadRootDir(), $name);
    // On sauvegarde le nom de fichier dans notre attribut $url
    $this->url = $name;
    // On crée également le futur attribut alt de notre balise <img>
    $this->alt = $name;
  }
  public function getUploadDir()
  {
    // On retourne le chemin relatif vers l'image pour un navigateur
    return 'uploads/img';
  }
  protected function getUploadRootDir()
  {
    // On retourne le chemin relatif vers l'image pour notre code PHP
    return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }
    
    public function getWebPath()
  {
    return $this->getUploadDir().'/'.$this->getUrl();
  }
}