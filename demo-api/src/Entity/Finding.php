<?php
// api/src/Entity/Finding.php

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
class Finding
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
     * @ORM\OneToMany(targetEntity=Action::class, mappedBy="findings", orphanRemoval=true)
     */
    private $actions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=Waste::class, mappedBy="waste", cascade={"persist", "remove"})
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
     * @return Collection<int, Action>
     */
    public function getactions(): Collection
    {
        return $this->actions;
    }

    public function addAction(Action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setFindings($this);
        }

        return $this;
    }

    public function removeAction(Action $action): self
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



   public function getWaste(): ?Waste
   {
       return $this->waste;
   }

   public function setWaste(?Waste $waste): self
   {
       // unset the owning side of the relation if necessary
       if ($waste === null && $this->waste !== null) {
           $this->waste->setWaste(null);
       }

       // set the owning side of the relation if necessary
       if ($waste !== null && $waste->getWaste() !== $this) {
           $waste->setWaste($this);
       }

       $this->waste = $waste;

       return $this;
   }
    public function __tostring()
    {
        return $this->description;

    }

}