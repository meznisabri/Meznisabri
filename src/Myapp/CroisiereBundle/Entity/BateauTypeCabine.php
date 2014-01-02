<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BateauTypeCabine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Myapp\CroisiereBundle\Entity\BateauTypeCabineRepository")
  */
class BateauTypeCabine
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
  
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\Bateau")

   */
  private $Bateau;
  /**
   
   * @ORM\ManyToOne(targetEntity="Myapp\CroisiereBundle\Entity\TypeCabine")
   */
  private $TypeCabine;
    
    /**
     * Set Bateau
     *
     * @param \Myapp\CroisiereBundle\Entity\Bateau $bateau
     * @return BateauTypeCabine
     */
    public function setBateau(\Myapp\CroisiereBundle\Entity\Bateau $bateau = null)
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
     * Set TypeCabine
     *
     * @param \Myapp\CroisiereBundle\Entity\TypeCabine $typeCabine
     * @return BateauTypeCabine
     */
    public function setTypeCabine(\Myapp\CroisiereBundle\Entity\TypeCabine $typeCabine = null)
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
}