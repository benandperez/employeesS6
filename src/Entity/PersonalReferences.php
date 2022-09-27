<?php

namespace App\Entity;

use App\Repository\PersonalReferencesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonalReferencesRepository::class)]
class PersonalReferences
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $lastNames = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birthDay = null;

    #[ORM\ManyToOne(inversedBy: 'personalReferences')]
    private ?Gender $gender = null;

    #[ORM\ManyToOne(inversedBy: 'personalReferences')]
    private ?Relationship $relationship = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ocupation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastNames(): ?string
    {
        return $this->lastNames;
    }

    public function setLastNames(?string $lastNames): self
    {
        $this->lastNames = $lastNames;

        return $this;
    }

    public function getBirthDay(): ?\DateTimeInterface
    {
        return $this->birthDay;
    }

    public function setBirthDay(?\DateTimeInterface $birthDay): self
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getRelationship(): ?Relationship
    {
        return $this->relationship;
    }

    public function setRelationship(?Relationship $relationship): self
    {
        $this->relationship = $relationship;

        return $this;
    }

    public function getOcupation(): ?string
    {
        return $this->ocupation;
    }

    public function setOcupation(?string $ocupation): self
    {
        $this->ocupation = $ocupation;

        return $this;
    }
}
