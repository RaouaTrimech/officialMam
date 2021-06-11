<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_projet;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Media::class, mappedBy="images")
     */
    private $images;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProjet(): ?string
    {
        return $this->nom_projet;
    }

    public function setNomProjet(string $nom_projet): self
    {
        $this->nom_projet = $nom_projet;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Media[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Media $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setImages($this);
        }

        return $this;
    }

    public function removeImage(Media $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getImages() === $this) {
                $image->setImages(null);
            }
        }

        return $this;
    }
}
