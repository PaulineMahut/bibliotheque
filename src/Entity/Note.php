<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/** 
 * @ORM\Entity 
*/
class Note
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /** 
     * @ORM\Column(name="comments", type="string") 
    */
    private string $comments;

    /** 
     * @ORM\Column(name="note", type="integer") 
    */
    private int $note;

    /**
     * @ORM\ManyToOne(targetEntity="Livre")
     * @ORM\JoinColumn(name="livre_id", referencedColumnName="id")
     */
    private Livre $livre;

     /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private User $user;

    public function __construct(string $comments, int $note, Livre $livre, User $user)
    {
        $this->comments = $comments;
        $this->note = $note;
        $this->livre = $livre;
        $this->user = $user;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of comments
     */ 
    public function getComments() : string
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @return  self
     */ 
    public function setComments(string $comments) :self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get the value of note
     */ 
    public function getNote() : int
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */ 
    public function setNote(int $note) : self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of livre
     */ 
    public function getLivre() : Livre
    {
        return $this->livre;
    }

    /**
     * Set the value of livre
     *
     * @return  self
     */ 
    public function setLivre(Livre $livre) : self
    {
        $this->livre = $livre;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser() : User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser(User $user) : self
    {
        $this->user = $user;

        return $this;
    }
}
