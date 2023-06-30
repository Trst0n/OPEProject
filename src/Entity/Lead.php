<?php

namespace App\Entity;

use App\Enum\Civility;
use App\Enum\Language;
use App\Enum\LeadState;
use App\Enum\Wish;
use App\Repository\LeadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap(['proposal' => Proposal::class, 'request' => Request::class])]
#[ORM\Entity(repositoryClass: LeadRepository::class)]
#[ORM\Table(name: '`lead`')]
class Lead
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotNull]
    #[ORM\Column(enumType: Civility::class)]
    private ?Civility $civility = null;

    #[Assert\NotNull]
    #[ORM\ManyToOne(inversedBy: 'leads')]
    private ?Person $person = null;

    #[ORM\ManyToOne(inversedBy: 'leads')]
    #[ORM\JoinColumn(nullable: false)]
    private ?City $city = null;

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::ARRAY, enumType: Language::class)]
    private array $languages = [];

    #[Assert\NotBlank]
    #[ORM\Column(type: Types::ARRAY, enumType: Wish::class)]
    private array $wishes = [];

    #[ORM\Column(length: 255, enumType: LeadState::class)]
    private LeadState $state = LeadState::REGISTERED;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): static
    {
        $this->city = $city;

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

    public function getWishes(): array
    {
        return $this->wishes;
    }

    public function setWishes(array $wishes): static
    {
        $this->wishes = $wishes;

        return $this;
    }

    public function getState(): ?LeadState
    {
        return $this->state;
    }

    public function setState(LeadState $state): static
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return Civility|null
     */
    public function getCivility(): ?Civility
    {
        return $this->civility;
    }

    /**
     * @param Civility|null $civility
     */
    public function setCivility(?Civility $civility): self
    {
        $this->civility = $civility;

        return $this;
    }
}
