<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InsertCodeRepository")
 */
class InsertCode
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
       /**
     * langage
     *
     * @var mixed
     */
    private $langage;

    /**
     * Get the value of langage
     * getLangage
     *
     * @return void
     */
    public function getLangage()
    {
        return $this->langage;
    }

    /**
     * Set the value of langage
     * setLangage
     *
     * @return  self
     */ 
    public function setLangage($langage)
    {
        $this->langage = $langage;

        return $this;
    }

}
