<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/** 
 * @ORM\Entity 
*/
class Bibliotheque
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /** 
     * @ORM\Column(name="name", type="string") 
    */
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of name
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }
}
