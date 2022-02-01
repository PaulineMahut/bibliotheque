<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
*/
class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /** 
     * @ORM\Column(name="pseudo", type="string") 
    */
    private string $pseudo;

    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo() : string
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo) : self
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
