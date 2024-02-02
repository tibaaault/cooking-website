<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\User\UserInterface;


#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $img = null;


    #[ORM\ManyToOne(inversedBy: 'recettes')]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: "recette", targetEntity: IngredientRecette::class, cascade: ["persist", "remove", "merge"])]
    private Collection $ingredientsRecette;


    #[ORM\OneToMany(mappedBy: 'recette', targetEntity: Step::class, fetch: "EAGER")]
    private Collection $steps;

    #[ORM\OneToMany(mappedBy: 'id_recette', targetEntity: Favorites::class)]
    private Collection $id_recette;


    public function __construct()
    {
        $this->steps = new ArrayCollection();
        $this->ingredientsRecette = new ArrayCollection();
        $this->id_recette = new ArrayCollection();

    }



    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Step>
     */
    public function getSteps(): Collection
    {
        return $this->steps;
    }

    public function addStep(Step $step): static
    {
        if (!$this->steps->contains($step)) {
            $this->steps->add($step);
            $step->setIdRecette($this);
        }

        return $this;
    }

    public function removeStep(Step $step): static
    {
        if ($this->steps->removeElement($step)) {
            // set the owning side to null (unless already changed)
            if ($step->getIdRecette() === $this) {
                $step->setIdRecette(null);
            }
        }

        return $this;
    }

  /**
     * @return Collection|IngredientRecette[]
     */
    public function getIngredientsRecette(): Collection
    {
        return $this->ingredientsRecette;
    }

    public function addIngredientsRecette(IngredientRecette $ingredientRecette): static
{
    $this->ingredientsRecette[] = $ingredientRecette;
    $ingredientRecette->setRecette($this); // Assurez-vous que cette méthode existe dans IngredientRecette.

    return $this;
}


    public function removeIngredientsRecette(IngredientRecette $ingredientRecette): self
    {
        if ($this->ingredientsRecette->removeElement($ingredientRecette)) {
            // set the owning side to null (unless already changed)
            if ($ingredientRecette->getRecette() === $this) {
                $ingredientRecette->setRecette(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Favorites>
     */
    public function getIdRecette(): Collection
    {
        return $this->id_recette;
    }

    public function addIdRecette(Favorites $idRecette): static
    {
        if (!$this->id_recette->contains($idRecette)) {
            $this->id_recette->add($idRecette);
            $idRecette->setIdRecette($this);
        }

        return $this;
    }

    public function removeIdRecette(Favorites $idRecette): static
    {
        if ($this->id_recette->removeElement($idRecette)) {
            // set the owning side to null (unless already changed)
            if ($idRecette->getIdRecette() === $this) {
                $idRecette->setIdRecette(null);
            }
        }

        return $this;
    }

    public function isEditableByUser(UserInterface $user): bool
{
    // Mettez en œuvre la logique pour vérifier si l'utilisateur peut éditer cette recette
    return $this->getUser() === $user;
}
}
