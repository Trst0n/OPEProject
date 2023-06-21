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



    #[ORM\ManyToMany(targetEntity: Proposal::class, mappedBy: 'workfields')]
    private Collection $proposals;

    #[ORM\ManyToMany(targetEntity: Curriculum::class, inversedBy: 'fields')]
    private Collection $curricula;



    public function __construct()
    {
        $this->proposals = new ArrayCollection();
        $this->curricula = new ArrayCollection();
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
     * @return Collection<int, Proposal>
     */
    public function getProposals(): Collection
    {
        return $this->proposals;
    }

    public function addProposal(Proposal $proposal): static
    {
        if (!$this->proposals->contains($proposal)) {
            $this->proposals->add($proposal);
            $proposal->addWorkfield($this);
        }

        return $this;
    }

    public function removeProposal(Proposal $proposal): static
    {
        if ($this->proposals->removeElement($proposal)) {
            $proposal->removeWorkfield($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Curriculum>
     */
    public function getCurricula(): Collection
    {
        return $this->curricula;
    }

    public function addCurriculum(Curriculum $curriculum): static
    {
        if (!$this->curricula->contains($curriculum)) {
            $this->curricula->add($curriculum);
        }

        return $this;
    }

    public function removeCurriculum(Curriculum $curriculum): static
    {
        $this->curricula->removeElement($curriculum);

        return $this;
    }


}
