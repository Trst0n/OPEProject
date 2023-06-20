<?php

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotNull]
    #[ORM\ManyToOne(inversedBy: 'sponsors')]
    private ?City $city = null;

    #[Assert\NotBlank]
    #[ORM\ManyToMany(targetEntity: Field::class, inversedBy: 'sponsors')]
    private Collection $workfield;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::ARRAY, enumType: Language::class)]
    private array $languages = [];

    #[ORM\OneToOne(inversedBy: 'sponsor', cascade: ['persist', 'remove'])]
    private ?Sponsorship $sponsorship = null;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::ARRAY, enumType: Wish::class)]
    private array $wishes = [];

    #[ORM\Column(length: 255)]
    private ?string $state = 'valid';

    #[ORM\ManyToOne(inversedBy: 'sponsorProposal')]
    private ?Person $person = null;

    public function __construct()
    {
        $this->workfield = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Field>
     */
    public function getWorkfield(): Collection
    {
        return $this->workfield;
    }

    public function addWorkfield(Field $workfield): static
    {
        if (!$this->workfield->contains($workfield)) {
            $this->workfield->add($workfield);
        }

        return $this;
    }

    public function setWorkfield(array $fields): self
    {
        foreach ($fields as $field){
            $this->addWorkfield($field);
        }
        return $this;
    }

    public function removeWorkfield(Field $workfield): static
    {
        $this->workfield->removeElement($workfield);

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
