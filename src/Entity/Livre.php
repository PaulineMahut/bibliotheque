<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/** 
 * @ORM\Entity 
*/
class Livre
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;

    /** 
     * @ORM\Column(name="title", type="string") 
    */
    private string $title;

    /** 
     * @ORM\Column(name="resume", type="string") 
    */
    private string $resume;

    /** 
     * @ORM\Column(name="author", type="string") 
    */
    private string $author;

    /** 
     * @ORM\Column(name="editor", type="string") 
    */
    private string $editor;

    /** 
     * @ORM\Column(name="isbn", type="integer") 
    */
    private int $isbn;

    /** 
     * @ORM\Column(name="exemplaires", type="integer") 
    */
    private int $exemplaires;

    public function __construct(string $title, string $resume, string $author, string $editor, int $isbn, int $exemplaires)
    {
        $this->title = $title;
        $this->resume = $resume;
        $this->author = $author;
        $this->editor = $editor;
        $this->isbn = $isbn;
        $this->exemplaires = $exemplaires;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume() : string
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume(string $resume) : self
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor() : string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(string $author) : self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of editor
     */ 
    public function getEditor() : string
    {
        return $this->editor;
    }

    /**
     * Set the value of editor
     *
     * @return  self
     */ 
    public function setEditor(string $editor) : self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn() : int
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn(int $isbn) : self
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of exemplaires
     */ 
    public function getExemplaires() : int
    {
        return $this->exemplaires;
    }

    /**
     * Set the value of exemplaires
     *
     * @return  self
     */ 
    public function setExemplaires(int $exemplaires) : self
    {
        $this->exemplaires = $exemplaires;

        return $this;
    }
}
