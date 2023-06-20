<?php

namespace App\Entity;

use App\Repository\EstablishmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstablishmentRepository::class)]
class Establishment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'establishment', targetEntity: Curriculum::class)]
    private Collection $curricula;

    #[ORM\OneToMany(mappedBy: 'establishment', targetEntity: Student::class)]
    private Collection $students;

    public function __construct()
    {
        $this->curricula = new ArrayCollection();
        $this->students = new ArrayCollection();
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
    public function getCurricula(): Collection
    {
        return $this->curricula;
    }

    public function addCurriculum(Curriculum $curriculum): static
    {
        if (!$this->curricula->contains($curriculum)) {
            $this->curricula->add($curriculum);
            $curriculum->setEstablishment($this);
        }

        return $this;
    }

    public function removeCurriculum(Curriculum $curriculum): static
    {
        if ($this->curricula->removeElement($curriculum)) {
            // set the owning side to null (unless already changed)
            if ($curriculum->getEstablishment() === $this) {
                $curriculum->setEstablishment(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): static
    {
        if (!$this->students->contains($student)) {
            $this->students->add($student);
            $student->setEstablishment($this);
        }

        return $this;
    }

    public function removeStudent(Student $student): static
    {
        if ($this->students->removeElement($student)) {
            // set the owning side to null (unless already changed)
            if ($student->getEstablishment() === $this) {
                $student->setEstablishment(null);
            }
        }

        return $this;
    }
}
