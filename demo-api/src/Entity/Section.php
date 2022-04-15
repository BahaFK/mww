<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"section"}}
 *     )
 * @ORM\Entity(repositoryClass=SectionRepository::class)
 */
class Section
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"section"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"section"})
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"section"})
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Unit::class, mappedBy="section")
     */
    private $section;

    /**
     * @ORM\OneToMany(targetEntity=Resp::class, mappedBy="sections")
     */
    private $resps;

    public function __construct()
    {
        $this->section = new ArrayCollection();
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
     * @return Collection<int, Unit>
     */
    public function getSection(): Collection
    {
        return $this->section;
    }

    public function addSection(Unit $section): self
    {
        if (!$this->section->contains($section)) {
            $this->section[] = $section;
            $section->setSection($this);
        }

        return $this;
    }

    public function removeSection(Unit $section): self
    {
        if ($this->section->removeElement($section)) {
            // set the owning side to null (unless already changed)
            if ($section->getSection() === $this) {
                $section->setSection(null);
            }
        }

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
            $resp->setSections($this);
        }

        return $this;
    }

    public function removeResp(Resp $resp): self
    {
        if ($this->resps->removeElement($resp)) {
            // set the owning side to null (unless already changed)
            if ($resp->getSections() === $this) {
                $resp->setSections(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->ref;

    }
}
