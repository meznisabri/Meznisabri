<?php

namespace Myapp\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pension
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pension
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
     * @ORM\Column(name="TypePension", type="string", length=255)
     */
    private $typePension;


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
     * Set typePension
     *
     * @param string $typePension
     * @return Pension
     */
    public function setTypePension($typePension)
    {
        $this->typePension = $typePension;
    
        return $this;
    }

    /**
     * Get typePension
     *
     * @return string 
     */
    public function getTypePension()
    {
        return $this->typePension;
    }
}