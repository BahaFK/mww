<?php
// api/src/Entity/Area.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * An area.
 *
 * @ORM\Entity
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"area:read"}},
 *     denormalizationContext={"groups"={"area:write"}},
 *     attributes={"order"={"updatedAt": "DESC"}}
 *     )
 * @ApiFilter(SearchFilter::class, properties={"ref":"exact", "name":"ipartial"})
 *
 */
class Area
{
        /**
         * The id of this review.
         *
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         * @Groups({"unit","area:read","action:read"})
         */
    private ?int $id = null;




        
    /**
     * @ORM\OneToMany(targetEntity=Action::class, mappedBy="area:read", orphanRemoval=true)
     */
    private $actions;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"unit","area:read","area:write","action:read"})
     */
    private $ref;

    /**
     * @ORM\ManyToOne(targetEntity=Unit::class, inversedBy="unit")
     * @Groups({"area:write"})
     */
    private $unit;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"unit","area:read","area:write","action:read"})
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Resp::class, mappedBy="areas")
     */
    private $resps;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     * @Groups({"action"})

     */

    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     * @Groups({"action"})

     */
    private $updatedAt;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
        $this->resps = new ArrayCollection();
    }


    /**
     * @return Collection<int, Action>
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(Action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setArea($this);
        }

        return $this;
    }

    public function removeAction(Action $action): self
    {
        if ($this->actions->removeElement($action)) {
            // set the owning side to null (unless already changed)
            if ($action->getArea() === $this) {
                $action->setArea(null);
            }
        }

        return $this;
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

    public function getUnit(): ?Unit
    {
        return $this->unit;
    }


    /**
     * @Groups("area:read")
     */
    public function getUnitId(): ?int
    {
        return $this->unit->getId();
    }

    public function getUnitData(): ?string
    {
        return $this->unit->getRef();
    }

    public function setUnit(?Unit $unit): self
    {
        $this->unit = $unit;

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
    public function __toString(){
        return $this->ref;
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
            $resp->setAreas($this);
        }

        return $this;
    }

    public function removeResp(Resp $resp): self
    {
        if ($this->resps->removeElement($resp)) {
            // set the owning side to null (unless already changed)
            if ($resp->getAreas() === $this) {
                $resp->setAreas(null);
            }
        }

        return $this;
    }
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }


    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
