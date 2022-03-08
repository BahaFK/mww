<?php
// api/src/Entity/finding.php

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
 * @ApiFilter(SearchFilter::class, properties={"id":"exact", "waste":"ipartial"})

 */
#[ApiResource]
class finding
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
     * @ORM\OneToMany(targetEntity=action::class, mappedBy="findings", orphanRemoval=true)
     */
    private $actions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $waste;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, action>
     */
    public function getactions(): Collection
    {
        return $this->actions;
    }

    public function addAction(action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setFindings($this);
        }

        return $this;
    }

    public function removeAction(action $action): self
    {
        if ($this->actions->removeElement($action)) {
            // set the owning side to null (unless already changed)
            if ($action->getFindings() === $this) {
                $action->setFindings(null);
            }
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getWaste(): ?string
    {
        return $this->waste;
    }

    public function setWaste(string $waste): self
    {
        $this->waste = $waste;

        return $this;
    }
   // public function __tostring()
   // {
   // return $this->findings;
        
   // }
}