<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UnitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"unit"}}
 *     )
 * @ORM\Entity(repositoryClass=UnitRepository::class)
 */
class Unit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"unit"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"unit"})
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"unit"})
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Area::class, mappedBy="unit")
     * @Groups({"unit"})
     */
    private $areas;

    /**
     * @ORM\ManyToOne(targetEntity=Section::class, inversedBy="section")
     *
     */
    private $section;

    /**
     * @ORM\OneToMany(targetEntity=Resp::class, mappedBy="units")
     */
    private $resps;

    public function __construct()
    {
        $this->areas = new ArrayCollection();
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
    public function getAreas(): Collection
    {
        return $this->areas;
    }

    public function addAreas(Area $areas): self
    {
        if (!$this->areas->contains($areas)) {
            $this->areas[] = $areas;
            $areas->setUnit($this);
        }

        return $this;
    }

    public function removeAreas(Area $areas): self
    {
        if ($this->areas->removeElement($areas)) {
            // set the owning side to null (unless already changed)
            if ($areas->getUnit() === $this) {
                $areas->setUnit(null);
            }
        }

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }


    /**
     * @Groups({"unit"})
     */
    public function getSectionData(): ?string
    {
        return $this->section->getRef() . ' - ' . $this->section->getName();
    }

    /**
     * @Groups({"unit"})
     */
    public function getSectionId(): ?int
    {
        return $this->section->getId();
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
    public function __toString()
    {
        return $this->ref;

    }
}
