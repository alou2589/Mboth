<?php

namespace App\Entity;

use App\Repository\MaisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: MaisonRepository::class)]
#[UniqueEntity("nom_maison")]

class Maison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_maison;

    #[ORM\Column(type: 'string', length: 255)]
    private $code_maison;

    #[ORM\ManyToOne(targetEntity: Secteur::class, inversedBy: 'maisons')]
    #[ORM\JoinColumn(nullable: false)]
    private $secteur;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\OneToMany(mappedBy: 'maison', targetEntity: Personne::class, orphanRemoval: true)]
    private $personnes;

    #[ORM\Column(type: 'text')]
    private $localisation;

    #[ORM\Column(type: 'boolean')]
    private $existence_arbre;

    #[ORM\OneToMany(mappedBy: 'maison', targetEntity: Arbre::class)]
    private $arbres;

    #[ORM\Column(type: 'boolean')]
    private $existence_eau;

    #[ORM\Column(type: 'boolean')]
    private $existence_electricite;

    #[ORM\Column(type: 'boolean')]
    private $existence_internet;

    #[ORM\Column(type: 'boolean')]
    private $existence_fosse_septique;

    #[ORM\Column(type: 'text')]
    private $qr_maison;

    public function __construct()
    {
        $this->arbres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMaison(): ?string
    {
        return $this->nom_maison;
    }

    public function setNomMaison(string $nom_maison): self
    {
        $this->nom_maison = $nom_maison;

        return $this;
    }

    public function getCodeMaison(): ?string
    {
        return $this->code_maison;
    }

    public function setCodeMaison(string $code_maison): self
    {
        $this->code_maison = $code_maison;

        return $this;
    }

    public function getSecteur(): ?Secteur
    {
        return $this->secteur;
    }

    public function setSecteur(?Secteur $secteur): self
    {
        $this->secteur = $secteur;

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
     * @return Collection<int, Personne>
     */
    public function getPersonnes(): Collection
    {
        return $this->personnes;
    }

    public function addPersonne(Personne $personne): self
    {
        if (!$this->personnes->contains($personne)) {
            $this->personnes[] = $personne;
            $personne->setMaison($this);
        }

        return $this;
    }

    public function removePersonne(Personne $personne): self
    {
        if ($this->personnes->removeElement($personne)) {
            // set the owning side to null (unless already changed)
            if ($personne->getMaison() === $this) {
                $personne->setMaison(null);
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

    public function isExistenceArbre(): ?bool
    {
        return $this->existence_arbre;
    }

    public function setExistenceArbre(bool $existence_arbre): self
    {
        $this->existence_arbre = $existence_arbre;

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
            $arbre->setMaison($this);
        }

        return $this;
    }

    public function removeArbre(Arbre $arbre): self
    {
        if ($this->arbres->removeElement($arbre)) {
            // set the owning side to null (unless already changed)
            if ($arbre->getMaison() === $this) {
                $arbre->setMaison(null);
            }
        }

        return $this;
    }

    public function isExistenceEau(): ?bool
    {
        return $this->existence_eau;
    }

    public function setExistenceEau(bool $existence_eau): self
    {
        $this->existence_eau = $existence_eau;

        return $this;
    }

    public function isExistenceElectricite(): ?bool
    {
        return $this->existence_electricite;
    }

    public function setExistenceElectricite(bool $existence_electricite): self
    {
        $this->existence_electricite = $existence_electricite;

        return $this;
    }

    public function isExistenceInternet(): ?bool
    {
        return $this->existence_internet;
    }

    public function setExistenceInternet(bool $existence_internet): self
    {
        $this->existence_internet = $existence_internet;

        return $this;
    }

    public function isExistenceFosseSeptique(): ?bool
    {
        return $this->existence_fosse_septique;
    }

    public function setExistenceFosseSeptique(bool $existence_fosse_septique): self
    {
        $this->existence_fosse_septique = $existence_fosse_septique;

        return $this;
    }

    public function getQrMaison(): ?string
    {
        return $this->qr_maison;
    }

    public function setQrMaison(string $qr_maison): self
    {
        $this->qr_maison = $qr_maison;

        return $this;
    }


}
