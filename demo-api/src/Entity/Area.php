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


/**
 * An area.
 *
 * @ORM\Entity
 * @ApiResource(
 *     normalizationContext={"groups"={"Area"}},
 *     denormalizationContext={"groups"={"Area"}}
 *     )
 * @ApiFilter(SearchFilter::class, properties={"ref":"exact", "name":"ipartial"})

 */
#[ApiResource]
class Area
{
        /**
         * The id of this review.
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
    private ?int $id = null;




        
    /**
     * @ORM\OneToMany(targetEntity=Action::class, mappedBy="area", orphanRemoval=true)
     */
    private $actions;

    /**
     * @Groups({"Action"})
     * @Groups({"Area"})
     * @ORM\Column(type="string", length=255)
     */
    private $ref;

    /**
     * @ORM\ManyToOne(targetEntity=Unit::class, inversedBy="unit")
     * @Groups({"Area"})
     */
    private $unit;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Area"})
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Resp::class, mappedBy="areas")
     */
    private $resps;

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

}
