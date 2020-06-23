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
     * @Assert\Unique(message = "Ce titre existe déjà sur un autre article")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Unique(message = "Ce slug existe déjà sur un autre article")
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
     * getTitle
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    /**
     * setTitle
     *
     * @param  mixed $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

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
     * getImagesUne
     *
     * @return string
     */
    public function getImagesUne(): ?string
    {
        return $this->imagesUne;
    }
    
    /**
     * setImagesUne
     *
     * @param  mixed $imagesUne
     * @return self
     */
    public function setImagesUne(string $imagesUne): self
    {
        $this->imagesUne = $imagesUne;

        return $this;
    }
    
    /**
     * getHat
     *
     * @return string
     */
    public function getHat(): ?string
    {
        return $this->hat;
    }
    
    /**
     * setHat
     *
     * @param  mixed $hat
     * @return self
     */
    public function setHat(string $hat): self
    {
        $this->hat = $hat;

        return $this;
    }
    
    /**
     * getSubCategory
     *
     * @return SubCategories
     */
    public function getSubCategory(): ?SubCategories
    {
        return $this->subCategory;
    }
    
    /**
     * setSubCategory
     *
     * @param  mixed $subCategory
     * @return self
     */
    public function setSubCategory(?SubCategories $subCategory): self
    {
        $this->subCategory = $subCategory;

        return $this;
    }
    
    /**
     * getContent
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    
    /**
     * setContent
     *
     * @param  mixed $content
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
    
    /**
     * getCreatedAt
     *
     * @return DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }
    
    /**
     * setCreatedAt
     *
     * @param  mixed $createdAt
     * @return self
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    
    /**
     * getOnline
     *
     * @return bool
     */
    public function getOnline(): ?bool
    {
        return $this->online;
    }
    
    /**
     * setOnline
     *
     * @param  mixed $online
     * @return self
     */
    public function setOnline(?bool $online): self
    {
        $this->online = $online;

        return $this;
    }
    
    /**
     * getSlider
     *
     * @return bool
     */
    public function getSlider(): ?bool
    {
        return $this->slider;
    }
    
    /**
     * setSlider
     *
     * @param  mixed $slider
     * @return self
     */
    public function setSlider(?bool $slider): self
    {
        $this->slider = $slider;

        return $this;
    }
 
    
    /**
     * getMediaToken
     *
     * @return string
     */
    public function getMediaToken(): ?string
    {
        return $this->mediaToken;
    }
    
    /**
     * setMediaToken
     *
     * @param  mixed $mediaToken
     * @return self
     */
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

    public function __toString() {
        return $this->title;
        return $this->slug;
        return $this->subCategory;
        return $this->createdAt;
    }

}
