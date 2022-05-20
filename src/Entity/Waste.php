<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WasteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * @ORM\Entity(repositoryClass=WasteRepository::class)
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"waste:read"}},
 *     denormalizationContext={"groups"={"waste:write"}}
 *     )
 */
class Waste
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"waste:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @SerializedName("ref")
     * @Groups({"waste:read"})
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=Action::class, inversedBy="wastes")
     */
    private $actions;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
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
     * @return Collection<int, Actions>
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(Action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
        }

        return $this;
    }

    public function removeAction(Action $action): self
    {
        $this->actions->removeElement($action);

        return $this;
    }

    public function __toString()
    {
        return $this->type;

    }
}
