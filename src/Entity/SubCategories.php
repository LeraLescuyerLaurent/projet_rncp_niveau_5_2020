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
     * @Assert\Unique(message = "Cette sous-catégorie existe déjà")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\Unique(message = "Ce slug existe déjà pour une autre sous catégorie ")
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
     * getCategories
     *
     * @return Categories
     */
    public function getCategories(): ?Categories
    {
        return $this->categories;
    }
    
    /**
     * setCategories
     *
     * @param  mixed $categories
     * @return self
     */
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
    
    /**
     * addPost
     *
     * @param  mixed $post
     * @return self
     */
    public function addPost(Posts $post): self
    {
        if (!$this->post->contains($post)) {
            $this->post[] = $post;
            $post->setSubCategory($this);
        }

        return $this;
    }
    
    /**
     * __toString
     *
     * @return void
     */
    public function __toString() {
        return $this->name;
        return $this->categories;
        return $this->slug;
        return $this->post;
    }
}
