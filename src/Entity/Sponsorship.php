<?php

namespace App\Entity;

use App\Enum\Wish;
use App\Repository\SponsorshipRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SponsorshipRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Sponsorship
{

    public function __construct()
    {
        $this->created_at= new \DateTimeImmutable();
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(type: Types::ARRAY, enumType: Wish::class)]
    private array $wishes = [];

    #[ORM\Column(length: 255)]
    private SponsorshipState|string|null $state = SponsorshipState::STATE_INITIALIZED;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'sponsorship')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Request $sponsorRequest = null;

    #[ORM\ManyToOne(inversedBy: 'sponsorship')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proposal $sponsorProposal = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updates_at = null;

    public function getId(): ?int
    {
        return $this->id;
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


    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    #[ORM\PrePersist]
    public function setCreatedAt(): static
    {
        $this->created_at = new \DateTimeImmutable();

        return $this;
    }

    public function getSponsorRequest(): ?Request
    {
        return $this->sponsorRequest;
    }

    public function setSponsorRequest(?Request $sponsorRequest): static
    {
        $this->sponsorRequest = $sponsorRequest;

        return $this;
    }

    public function getSponsorProposal(): ?Proposal
    {
        return $this->sponsorProposal;
    }

    public function setSponsorProposal(?Proposal $sponsorProposal): static
    {
        $this->sponsorProposal = $sponsorProposal;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updates_at;
    }

    #[ORM\PostUpdate]
    #[ORM\PrePersist]
    public function setUpdatedAt(): static
    {
        $this->updates_at = new \DateTimeImmutable();

        return $this;
    }
}
