<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TypeArbreRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: TypeArbreRepository::class)]
#[UniqueEntity("nom_type_arbre")]
class TypeArbre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_type_arbre;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updated_at;

    #[ORM\OneToMany(mappedBy: 'type_arbre', targetEntity: Arbre::class, orphanRemoval: true)]
    private $arbres;

    public function __construct()
    {
        $this->arbres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTypeArbre(): ?string
    {
        return $this->nom_type_arbre;
    }

    public function setNomTypeArbre(string $nom_type_arbre): self
    {
        $this->nom_type_arbre = $nom_type_arbre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection<int, Arbre>
     */
    public function getArbres(): Collection
    {
        return $this->arbres;
    }

    public function addArbre(Arbre $arbre): self
    {
        if (!$this->arbres->contains($arbre)) {
            $this->arbres[] = $arbre;
            $arbre->setTypeArbre($this);
        }

        return $this;
    }

    public function removeArbre(Arbre $arbre): self
    {
        if ($this->arbres->removeElement($arbre)) {
            // set the owning side to null (unless already changed)
            if ($arbre->getTypeArbre() === $this) {
                $arbre->setTypeArbre(null);
            }
        }

        return $this;
    }
}
