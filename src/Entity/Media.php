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
    
    private $format; 
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getName(): ?string
    {
        return $this->name;
    }
    
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
    
    public function getUrl(): ?string
    {
        return $this->url;
    }
    
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
    
    public function getToken(): ?string
    {
        return $this->token;
    }
    
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
    
    public function getAlt(): ?string
    {
        return $this->alt;
    }
    
    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }    
    
        public function getFormat()
        {
            return $this->format;
        }
    
        public function setFormat($format)
        {
            $this->format = $format;
    
            return $this;
        }

    public function __toString() {
        return $this->name;
        return $this->slug;
    }
}
