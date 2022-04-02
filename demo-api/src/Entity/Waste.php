<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WasteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=WasteRepository::class)
 */
class Waste
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
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=Action::class, inversedBy="wastes")
     */
    private $waste;

    public function __construct()
    {
        $this->waste = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Action>
     */
    public function getWaste(): Collection
    {
        return $this->waste;
    }

    public function addWaste(Action $waste): self
    {
        if (!$this->waste->contains($waste)) {
            $this->waste[] = $waste;
        }

        return $this;
    }

    public function removeWaste(Action $waste): self
    {
        $this->waste->removeElement($waste);

        return $this;
    }

    public function __toString()
    {
        return $this->type;

    }
}
