<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
*/
class Contact
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="string", length=255)
    * 
    *@Assert\Email(
    *     message = "The email '{{ value }}' is not a valid email."
    * )
    */
    private $email;

    /**
    * @ORM\Column(type="string", length=50)
    * @Assert\Length(
    *      min = 2,
    *      max = 50,
    *      minMessage = "Votre nom doit contenir au minimum{{ limit }} characteres",
    *      maxMessage = "Votre Nom doit contenir au maximum {{ limit }} characteres",
    *      allowEmptyString = false
    * )
    *  
    * @Assert\NotNull( message = "merci d'entrer Votre nom")
    */
    private $name;

    /**
    * @ORM\Column(type="text")
    * @Assert\NotNull( message = "Veuillez saisir un message")
    */
    private $content;

    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    private $lu;

    /**
    * @ORM\Column(type="datetime")
    */
    private $createdAt;

    /**
    * @ORM\Column(type="string", length=150)
    * @Assert\Length(
    *    min = 2,
    *    max = 150,
    *    minMessage = "Le titre doit contenir au minimum{{ limit }} characteres",
    *    maxMessage = "Le titre doit contenir au maximum {{ limit }} characteres",
    *    allowEmptyString = false
    * )
    *  
    * @Assert\NotNull( message = "Veuillez d'entrer un titre à votre message")
    */
    private $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getLu(): ?bool
    {
        return $this->lu;
    }

    public function setLu(?bool $lu): self
    {
        $this->lu = $lu;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
