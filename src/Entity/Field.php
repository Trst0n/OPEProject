<?php

namespace App\Entity;

use App\Repository\FieldRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FieldRepository::class)]
class Field
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Curriculum::class, inversedBy: 'fields')]
    private Collection $curriculum;

    #[ORM\ManyToMany(targetEntity: Sponsor::class, mappedBy: 'workfield')]
    private Collection $sponsors;

    public function __construct()
    {
        $this->curriculum = new ArrayCollection();
        $this->sponsors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Curriculum>
     */
    public function getCurriculum(): Collection
    {
        return $this->curriculum;
    }

    public function addCurriculum(Curriculum $curriculum): static
    {
        if (!$this->curriculum->contains($curriculum)) {
            $this->curriculum->add($curriculum);
        }

        return $this;
    }

    public function removeCurriculum(Curriculum $curriculum): static
    {
        $this->curriculum->removeElement($curriculum);

        return $this;
    }

    /**
     * @return Collection<int, Sponsor>
     */
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsor $sponsor): static
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors->add($sponsor);
            $sponsor->addWorkfield($this);
        }

        return $this;
    }

    public function removeSponsor(Sponsor $sponsor): static
    {
        if ($this->sponsors->removeElement($sponsor)) {
            $sponsor->removeWorkfield($this);
        }

        return $this;
    }
}
