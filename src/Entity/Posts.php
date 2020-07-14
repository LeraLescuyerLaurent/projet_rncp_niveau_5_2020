<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostsRepository")
 */
class Posts
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
    */
    private $title;

    /**
    * @ORM\Column(type="string", length=255)
    * 
    */
    private $slug;

    /**
    * @ORM\Column(type="string", length=255)
    */
    private $imagesUne;

    /**
    * @ORM\Column(type="string", length=255)
    */
    private $hat;

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\SubCategories", inversedBy="post")
    * @ORM\JoinColumn(nullable=false)
    * @Assert\NotBlank()
    * 
    */
    private $subCategory;

    /**
    * @ORM\Column(type="text")
    */
    private $content;

    /**
    * @ORM\Column(type="datetime")
    */
    private $createdAt;

    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    private $online;

    /**
    * @ORM\Column(type="boolean", nullable=true)
    */
    private $slider;

    /**
    * @ORM\Column(type="string", length=255)
    */
    private $mediaToken;

    /**
    * @ORM\Column(type="integer")
    */
    private $points;

    /**
    * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="postId")
    */
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): ?self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): ?self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getImagesUne(): ?string
    {
        return $this->imagesUne;
    }

    public function setImagesUne(string $imagesUne): self
    {
        $this->imagesUne = $imagesUne;

        return $this;
    }

    public function getHat(): ?string
    {
        return $this->hat;
    }

    public function setHat(string $hat): self
    {
        $this->hat = $hat;

        return $this;
    }

    public function getSubCategory(): ?SubCategories
    {
        return $this->subCategory;
    }

    public function setSubCategory(?SubCategories $subCategory): self
    {
        $this->subCategory = $subCategory;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getOnline(): ?bool
    {
        return $this->online;
    }

    public function setOnline(?bool $online): self
    {
        $this->online = $online;

        return $this;
    }

    public function getSlider(): ?bool
    {
        return $this->slider;
    }
    
    public function setSlider(?bool $slider): self
    {
        $this->slider = $slider;

        return $this;
    }
    
    public function getMediaToken(): ?string
    {
        return $this->mediaToken;
    }
    
    public function setMediaToken(string $mediaToken): self
    {
        $this->mediaToken = $mediaToken;

        return $this;
    }


    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return Collection|Comments[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setPostId($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getPostId() === $this) {
                $comment->setPostId(null);
            }
        }

        return $this;
    }



}
