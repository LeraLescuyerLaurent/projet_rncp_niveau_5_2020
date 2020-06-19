<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 */
class Media
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

        /**
     * 
     */
    private $format;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\File(
     *     maxSize = "2000k",
     *     mimeTypes = {"image/jpg", "image/svg", "image/png", "image/jpeg"},
     *     mimeTypesMessage = "choisir une image au bon format"
     * )
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alt;
        
    /**
     * getId
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * getName
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param  mixed $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * getSlug
     *
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    
    /**
     * setSlug
     *
     * @param  mixed $slug
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
    
    /**
     * getUrl
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    
    /**
     * setUrl
     *
     * @param  mixed $url
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
    
    /**
     * getToken
     *
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    
    /**
     * setToken
     *
     * @param  mixed $token
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
    
    /**
     * getAlt
     *
     * @return string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }
    
    /**
     * setAlt
     *
     * @param  mixed $alt
     * @return self
     */
    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }    
    /**
     * __toString
     *
     * @return void
     */
    public function __toString() {
        return $this->name;
        return $this->slug;
    }

    /**
     * Get the value of format
     */ 
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
