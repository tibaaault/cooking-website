<?php

namespace App\Entity;

use App\Repository\IngredientRecetteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IngredientRecetteRepository::class)]
class IngredientRecette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\ManyToOne(inversedBy: "ingredientsRecette")]
    #[ORM\JoinColumn(nullable : false)]
    private ?recette $recette = null;


    #[ORM\ManyToOne(inversedBy : "ingredientsRecette", targetEntity : Ingredient::class)]
    #[ORM\JoinColumn(nullable :false)]
    private ?ingredient $ingredient = null;

    
    #[ORM\Column(length: 255)]
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecette(): ?Recette
    {
        return $this->recette;
    }

    public function setRecette(?Recette $recette): static
{
    $this->recette = $recette;

    return $this;
}


    public function getIngredient(): ?Ingredient
    {
        return $this->ingredient;
    }

    public function setIngredient(?Ingredient $ingredient): static
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}