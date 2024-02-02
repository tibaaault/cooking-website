<?php

namespace App\Entity;

use App\Repository\FavoritesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoritesRepository::class)]
class Favorites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'favorites')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'id_recette')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $id_recette = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdRecette(): ?Recette
    {
        return $this->id_recette;
    }

    public function setIdRecette(?Recette $id_recette): static
    {
        $this->id_recette = $id_recette;

        return $this;
    }
}
