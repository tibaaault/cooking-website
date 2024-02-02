<?php

namespace App\Entity;

use App\Repository\StepRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StepRepository::class)]
class Step
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $step = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detail = null;


    #[ORM\ManyToOne(inversedBy: 'steps')]
    #[ORM\JoinColumn(name: 'recette_id', referencedColumnName: 'id', nullable: false)]
    private ?Recette $recette = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getStep(): ?int
    {
        return $this->step;
    }

    public function setStep(int $step): static
    {
        $this->step = $step;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): static
    {
        $this->detail = $detail;

        return $this;
    }

    public function getIdRecette(): ?Recette
    {
        return $this->recette;
    }
    
    public function setIdRecette(?Recette $recette): static
    {
        $this->recette = $recette;
    
        return $this;
    }
}
