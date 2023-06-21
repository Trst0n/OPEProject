<?php

namespace App\Entity;

use App\Repository\RequestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequestRepository::class)]
class Request extends Lead
{
    #[ORM\ManyToOne(inversedBy: 'requests')]
    private ?Curriculum $curriculum = null;

    #[ORM\OneToMany(mappedBy: 'sponsorRequest', targetEntity: Sponsorship::class)]
    private Collection $sponsorship;

    public function __construct()
    {
        $this->sponsorship = new ArrayCollection();
    }

    public function getCurriculum(): ?Curriculum
    {
        return $this->curriculum;
    }

    public function setCurriculum(?Curriculum $curriculum): static
    {
        $this->curriculum = $curriculum;

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
            $sponsorship->setSponsorRequest($this);
        }

        return $this;
    }

    public function removeSponsorship(Sponsorship $sponsorship): static
    {
        if ($this->sponsorship->removeElement($sponsorship)) {
            // set the owning side to null (unless already changed)
            if ($sponsorship->getSponsorRequest() === $this) {
                $sponsorship->setSponsorRequest(null);
            }
        }

        return $this;
    }
}
