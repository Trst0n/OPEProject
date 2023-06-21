<?php

namespace App\Entity;

use App\Repository\ProposalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProposalRepository::class)]
class Proposal extends Lead
{
    #[ORM\ManyToMany(targetEntity: Field::class, inversedBy: 'proposals')]
    private Collection $workfields;

    #[ORM\OneToMany(mappedBy: 'sponsorProposal', targetEntity: Sponsorship::class)]
    private Collection $sponsorship;

    public function __construct()
    {
        $this->workfields = new ArrayCollection();
        $this->sponsorship = new ArrayCollection();
    }

    /**
     * @return Collection<int, Field>
     */
    public function getWorkfields(): Collection
    {
        return $this->workfields;
    }

    public function addWorkfield(Field $workfield): static
    {
        if (!$this->workfields->contains($workfield)) {
            $this->workfields->add($workfield);
        }

        return $this;
    }

    public function setWorkfield(array $workfields): static
    {
        foreach ($workfields as $workfield){
            $this->addWorkfield($workfield);
        }

        return $this;
    }

    public function removeWorkfield(Field $workfield): static
    {
        $this->workfields->removeElement($workfield);

        return $this;
    }

    /**
     * @return Collection<int, Sponsorship>
     */
    public function getSponsorship(): Collection
    {
        return $this->sponsorship;
    }

    public function addSponsorship(Sponsorship $sponsorship): static
    {
        if (!$this->sponsorship->contains($sponsorship)) {
            $this->sponsorship->add($sponsorship);
            $sponsorship->setSponsorProposal($this);
        }

        return $this;
    }

    public function removeSponsorship(Sponsorship $sponsorship): static
    {
        if ($this->sponsorship->removeElement($sponsorship)) {
            // set the owning side to null (unless already changed)
            if ($sponsorship->getSponsorProposal() === $this) {
                $sponsorship->setSponsorProposal(null);
            }
        }

        return $this;
    }
}
