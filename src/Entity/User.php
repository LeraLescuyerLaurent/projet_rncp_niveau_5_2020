<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity("email", message = "Ce compte existe déjas")
 */
class User implements UserInterface
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="string", length=255)
    * @Assert\NotBlank
    *   @Assert\Length(
    *      min = 8,
    *      max = 15,
    *      minMessage = "Votre nom doit contenir au minimum {{ limit }} charactères",
    *      maxMessage = "Votre nom doit contenir au maximum {{ limit }} charactères",
    * )
    */
    private $name;

    /**
    * @ORM\Column(type="string", length=255, unique=true)
    * @Assert\NotBlank
    * @Assert\Email
    */
    private $email;

    /**
    *@ORM\Column(type="string", length=255)
    */
    private $password;



    
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }



    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed if a modern algorithm is used (ex: sodium, bcrypt)
    }

    /**
     * @see UserInterface
     */
    public function getUsername()
    {
        return $this->name;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        //
    }
}
