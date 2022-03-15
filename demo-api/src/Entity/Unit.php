<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UnitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=UnitRepository::class)
 */
class Unit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Area::class, mappedBy="unit")
     */
    private $unit;

    /**
     * @ORM\ManyToOne(targetEntity=Section::class, inversedBy="section")
     */
    private $section;

    /**
     * @ORM\OneToMany(targetEntity=Resp::class, mappedBy="units")
     */
    private $resps;

    public function __construct()
    {
        $this->unit = new ArrayCollection();
        $this->resps = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Area>
     */
    public function getUnit(): Collection
    {
        return $this->unit;
    }

    public function addUnit(Area $unit): self
    {
        if (!$this->unit->contains($unit)) {
            $this->unit[] = $unit;
            $unit->setUnit($this);
        }

        return $this;
    }

    public function removeUnit(Area $unit): self
    {
        if ($this->unit->removeElement($unit)) {
            // set the owning side to null (unless already changed)
            if ($unit->getUnit() === $this) {
                $unit->setUnit(null);
            }
        }

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @return Collection<int, Resp>
     */
    public function getResps(): Collection
    {
        return $this->resps;
    }

    public function addResp(Resp $resp): self
    {
        if (!$this->resps->contains($resp)) {
            $this->resps[] = $resp;
            $resp->setUnits($this);
        }

        return $this;
    }

    public function removeResp(Resp $resp): self
    {
        if ($this->resps->removeElement($resp)) {
            // set the owning side to null (unless already changed)
            if ($resp->getUnits() === $this) {
                $resp->setUnits(null);
            }
        }

        return $this;
    }
}
