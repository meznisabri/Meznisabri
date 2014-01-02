<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * PhotoTypeCabine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PhotoTypeCabine
{
    
   

   
      /**
   * @var integer
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\TypeCabine")
   * @ORM\JoinColumn(nullable=false)
   */
  private $TypeCabine;
  
   
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
     
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 400,
     *     minHeight = 200,
     *     maxHeight = 400
     * )
     
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $Photo;

 
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents';
    }
    

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
     * Set TypeCabine
     *
     * @param \Myapp\CroisiereBundle\Entity\TypeCabine $typeCabine
     * @return PhotoTypeCabine
     */
    public function setTypeCabine(\Myapp\CroisiereBundle\Entity\TypeCabine $typeCabine)
    {
        $this->TypeCabine = $typeCabine;
    
        return $this;
    }

    /**
     * Get TypeCabine
     *
     * @return \Myapp\CroisiereBundle\Entity\TypeCabine 
     */
    public function getTypeCabine()
    {
        return $this->TypeCabine;
    }

    /**
     * Set Photo
     *
     * @param string $photo
     * @return PhotoTypeCabine
     */
    public function setPhoto($photo)
    {
        $this->Photo = $photo;
    
        return $this;
    }

    /**
     * Get Photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->Photo;
    }
    
    public function upload()
{
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->Photo) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->Photo->move($this->getUploadRootDir(), $this->Photo->getClientOriginalName());

    // définit la propriété « path » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->path = $this->Photo->getClientOriginalName();

    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->Photo = null;
}
    
    
    
    

    /**
     * Set path
     *
     * @param string $path
     * @return PhotoTypeCabine
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}