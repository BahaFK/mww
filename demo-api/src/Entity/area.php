<?php
// api/src/Entity/area.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * A finding.
 *
 * @ORM\Entity
 * @ApiResource(formats={"json"})
 * @ApiFilter(SearchFilter::class, properties={"id":"exact", "ref":"ipartial"})
 *
 */
#[ApiResource]
class area
{
        /**
         * The id of this review.
         *
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
    private ?int $id = null;




        
    /**
     * @ORM\OneToMany(targetEntity=action::class, mappedBy="area", orphanRemoval=true)
     */
    private $actions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ref;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
    }


    /**
     * @return Collection<int, action>
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setArea($this);
        }

        return $this;
    }

    public function removeAction(action $action): self
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


}