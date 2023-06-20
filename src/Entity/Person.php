<?php

namespace App\Entity;

use App\Repository\PersonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: PersonRepository::class)]
class Person
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    private ?string $phonenumber = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Email]
    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $birthdate = null;

    #[Assert\NotNull]
    #[ORM\Column(enumType: Civility::class)]
    private ?Civility $civility = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\OneToMany(mappedBy: 'person', targetEntity: Sponsor::class)]
    private Collection $sponsorProposal;

    #[ORM\OneToMany(mappedBy: 'person', targetEntity: Student::class)]
    private Collection $supportRequest;

    public function __construct()
    {
        $this->sponsorProposal = new ArrayCollection();
        $this->supportRequest = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(string $phonenumber): static
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): static
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getCivility(): ?Civility
    {
        return $this->civility;
    }

    public function setCivility(Civility $civility): static
    {
        $this->civility = $civility;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

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

    /**
     * @return Collection<int, Sponsor>
     */
    public function getSponsorProposal(): Collection
    {
        return $this->sponsorProposal;
    }

    public function addSponsorProposal(Sponsor $sponsorProposal): static
    {
        if (!$this->sponsorProposal->contains($sponsorProposal)) {
            $this->sponsorProposal->add($sponsorProposal);
            $sponsorProposal->setPerson($this);
        }

        return $this;
    }

    public function removeSponsorProposal(Sponsor $sponsorProposal): static
    {
        if ($this->sponsorProposal->removeElement($sponsorProposal)) {
            // set the owning side to null (unless already changed)
            if ($sponsorProposal->getPerson() === $this) {
                $sponsorProposal->setPerson(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getSupportRequest(): Collection
    {
        return $this->supportRequest;
    }

    public function addSupportRequest(Student $supportRequest): static
    {
        if (!$this->supportRequest->contains($supportRequest)) {
            $this->supportRequest->add($supportRequest);
            $supportRequest->setPerson($this);
        }

        return $this;
    }

    public function removeSupportRequest(Student $supportRequest): static
    {
        if ($this->supportRequest->removeElement($supportRequest)) {
            // set the owning side to null (unless already changed)
            if ($supportRequest->getPerson() === $this) {
                $supportRequest->setPerson(null);
            }
        }

        return $this;
    }
}
