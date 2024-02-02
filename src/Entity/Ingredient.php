<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;


    #[ORM\OneToMany(mappedBy: 'ingredient', targetEntity: IngredientRecette::class)]
    private Collection $ingredientsRecette;




    public function __construct()
    {
        $this->ingredientsRecette = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, IngredientRecette>
     */
    public function getIngredientsRecette(): Collection
    {
        return $this->ingredientsRecette;
    }

    public function setIngredientsRecette(Collection $ingredientsRecette): static
    {
        $this->ingredientsRecette = $ingredientsRecette;
        return $this;
    }
}
