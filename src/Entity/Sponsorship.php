<?php

namespace App\Entity;

use App\Repository\SponsorshipRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SponsorshipRepository::class)]
class Sponsorship
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(mappedBy: 'sponsorship', cascade: ['persist', 'remove'])]
    private ?Sponsor $sponsor = null;

    #[ORM\OneToOne(mappedBy: 'sponsorship', cascade: ['persist', 'remove'])]
    private ?Student $student = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $wishes = [];

    #[ORM\Column(length: 255)]
    private ?string $state = 'initialized';

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSponsor(): ?Sponsor
    {
        return $this->sponsor;
    }

    public function setSponsor(?Sponsor $sponsor): static
    {
        // unset the owning side of the relation if necessary
        if ($sponsor === null && $this->sponsor !== null) {
            $this->sponsor->setSponsorship(null);
        }

        // set the owning side of the relation if necessary
        if ($sponsor !== null && $sponsor->getSponsorship() !== $this) {
            $sponsor->setSponsorship($this);
        }

        $this->sponsor = $sponsor;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(?Student $student): static
    {
        // unset the owning side of the relation if necessary
        if ($student === null && $this->student !== null) {
            $this->student->setSponsorship(null);
        }

        // set the owning side of the relation if necessary
        if ($student !== null && $student->getSponsorship() !== $this) {
            $student->setSponsorship($this);
        }

        $this->student = $student;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
