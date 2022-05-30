<?php

namespace App\Entity;

use App\Repository\QuartierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: QuartierRepository::class)]
#[UniqueEntity("nom_quartier")]
class Quartier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_quartier;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\OneToMany(mappedBy: 'quartier', targetEntity: Cellule::class, orphanRemoval: true)]
    private $cellules;

    #[ORM\Column(type: 'text')]
    private $localisation;

    public function __construct()
    {
        $this->cellules = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomQuartier(): ?string
    {
        return $this->nom_quartier;
    }

    public function setNomQuartier(string $nom_quartier): self
    {
        $this->nom_quartier = $nom_quartier;

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
     * @return Collection<int, Cellule>
     */
    public function getCellules(): Collection
    {
        return $this->cellules;
    }

    public function addCellule(Cellule $cellule): self
    {
        if (!$this->cellules->contains($cellule)) {
            $this->cellules[] = $cellule;
            $cellule->setQuartier($this);
        }

        return $this;
    }

    public function removeCellule(Cellule $cellule): self
    {
        if ($this->cellules->removeElement($cellule)) {
            // set the owning side to null (unless already changed)
            if ($cellule->getQuartier() === $this) {
                $cellule->setQuartier(null);
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
