<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubCategoriesRepository")
 */
class SubCategories
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
    * @ORM\Column(type="string", length=50)
    * @Assert\NotBlank(message = "Veuillez saisir un titre à votre catégorie")
    */
    private $name;

    /**
    * @ORM\Column(type="string", length=60)
    */
    private $slug;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="Subcategory")
    * @ORM\JoinColumn(nullable=false)
    */
    private $categories;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\Posts", mappedBy="subCategory")
    */
    private $post;

    public function __construct()
    {
        $this->post = new ArrayCollection();
    }

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

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return Collection|Posts[]
     * getPost
     *
     */
    public function getPost(): Collection
    {
        return $this->post;
    }

    public function addPost(Posts $post): self
    {
        if (!$this->post->contains($post)) {
            $this->post[] = $post;
            $post->setSubCategory($this);
        }

        return $this;
    }

    public function __toString() {
        return $this->name;
        return $this->categories;
        return $this->slug;
        return $this->post;
    }
}
