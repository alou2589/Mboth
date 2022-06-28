<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArbreRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ArbreRepository::class)]
class Arbre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_arbre;

    #[ORM\ManyToOne(targetEntity: TypeArbre::class, inversedBy: 'arbres')]
    #[ORM\JoinColumn(nullable: false)]
    private $type_arbre;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updated_at;

    #[ORM\Column(type: 'datetime_immutable')]
    private $created_at;

    #[ORM\ManyToOne(targetEntity: Maison::class, inversedBy: 'arbres')]
    private $maison;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomArbre(): ?string
    {
        return $this->nom_arbre;
    }

    public function setNomArbre(string $nom_arbre): self
    {
        $this->nom_arbre = $nom_arbre;

        return $this;
    }

    public function getTypeArbre(): ?TypeArbre
    {
        return $this->type_arbre;
    }

    public function setTypeArbre(?TypeArbre $type_arbre): self
    {
        $this->type_arbre = $type_arbre;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getMaison(): ?Maison
    {
        return $this->maison;
    }

    public function setMaison(?Maison $maison): self
    {
        $this->maison = $maison;

        return $this;
    }


}
