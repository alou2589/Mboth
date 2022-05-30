<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SecteurRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: SecteurRepository::class)]
#[UniqueEntity("nom_secteur")]
class Secteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_secteur;

    #[ORM\ManyToOne(targetEntity: Cellule::class, inversedBy: 'secteurs')]
    #[ORM\JoinColumn(nullable: false)]
    private $cellule;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\OneToMany(mappedBy: 'secteur', targetEntity: Maison::class, orphanRemoval: true)]
    private $maisons;

    #[ORM\Column(type: 'text')]
    private $localisation;

    public function __construct()
    {
        $this->maisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSecteur(): ?string
    {
        return $this->nom_secteur;
    }

    public function setNomSecteur(string $nom_secteur): self
    {
        $this->nom_secteur = $nom_secteur;

        return $this;
    }

    public function getCellule(): ?Cellule
    {
        return $this->cellule;
    }

    public function setCellule(?Cellule $cellule): self
    {
        $this->cellule = $cellule;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, Maison>
     */
    public function getMaisons(): Collection
    {
        return $this->maisons;
    }

    public function addMaison(Maison $maison): self
    {
        if (!$this->maisons->contains($maison)) {
            $this->maisons[] = $maison;
            $maison->setSecteur($this);
        }

        return $this;
    }

    public function removeMaison(Maison $maison): self
    {
        if ($this->maisons->removeElement($maison)) {
            // set the owning side to null (unless already changed)
            if ($maison->getSecteur() === $this) {
                $maison->setSecteur(null);
            }
        }

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }
}
