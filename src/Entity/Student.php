<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Annotations\Annotation\Enum;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotNull]
    #[ORM\ManyToOne(inversedBy: 'students')]
    private ?City $city = null;

    #[Assert\NotNull]
    #[ORM\ManyToOne(targetEntity: Curriculum::class, inversedBy: 'students')]
    private ?Curriculum $curriculum;

    #[Assert\NotNull]
    #[ORM\ManyToOne(inversedBy: 'students')]
    private ?Establishment $establishment = null;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::ARRAY, enumType: Language::class)]
    private array $languages = [];

    #[ORM\OneToOne(inversedBy: 'student', cascade: ['persist', 'remove'])]
    private ?Sponsorship $sponsorship = null;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::ARRAY, enumType: Wish::class)]
    private array $wishes = [];

    #[ORM\Column(length: 255)]
    private ?string $state = 'valid';

    #[ORM\ManyToOne(inversedBy: 'supportRequest')]
    private ?Person $person = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCurriculum(): ?Curriculum
    {
        return $this->curriculum;
    }

    public function setCurriculum(Curriculum $curriculum): static
    {
       $this->curriculum = $curriculum;
        return $this;
    }

    public function getEstablishment(): ?Establishment
    {
        return $this->establishment;
    }

    public function setEstablishment(?Establishment $establishment): static
    {
        $this->establishment = $establishment;

        return $this;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): static
    {
        $this->languages = $languages;

        return $this;
    }

    public function getSponsorship(): ?Sponsorship
    {
        return $this->sponsorship;
    }

    public function setSponsorship(?Sponsorship $sponsorship): static
    {
        $this->sponsorship = $sponsorship;

        return $this;
    }

    public function getWishes(): array
    {
        return $this->wishes;
    }

    public function setWishes(array $wishes): static
    {
        $this->wishes = $wishes;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function setPerson(?Person $person): static
    {
        $this->person = $person;

        return $this;
    }
}
