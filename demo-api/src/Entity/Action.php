<?php
// api/src/Entity/Action.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 * An action.
 *
 * @ORM\Entity
 * @ApiResource(formats={"json"})
 * @ApiFilter(SearchFilter::class, properties={"id":"exact", "date":"ipartial", "due_date":"ipartial", "week":"ipartial"})
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"action"}}
 *     )
 */
class Action
{
        /**
         * The id of this action.
         *
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         * @Groups({"action"})
         */
    private ?int $id ;



   /**
    * @ORM\ManyToOne(targetEntity=Area::class, inversedBy="actions")
    * @ORM\JoinColumn(nullable=false)
    */
   private $area;



    /**
     * @ORM\ManyToMany(targetEntity=Waste::class, mappedBy="waste")
     */
    private $wastes;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"action"})
     */
    private $week;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"action"})
     */
    private $date;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"action"})
     */
    private $due_date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"action"})
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"action"})
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"action"})
     */
    private $photo_before;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"action"})
     */
    private $photo_after;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="create")
     * @Groups({"action"})

     */
        
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="update")
     * @Groups({"action"})

     */
    private $updatedAt;


    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"action"})
     */
    private $finding;

    /**
     * @ORM\ManyToMany(targetEntity=Resp::class, mappedBy="actions")
     */
    private $resps;

    public function __construct()
    {
        $this->wastes = new ArrayCollection();
        $this->resps = new ArrayCollection();
    }
      

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @Groups({"action"})
     */
    public function getAreaData(): ?string
    {
        return $this->area->getRef() . ' - ' . $this->area->getName();
    }

    public function getArea(): ?Area
    {
        return $this->area;

    }

    public function setArea(?Area $area): self
    {
        $this->area = $area;

        return $this;
    }



    public function getWeek(): ?string
    {
        return $this->week;
    }

    public function setWeek(string $week): self
    {
        $this->week = $week;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDueDate(): ?\DateTimeInterface
    {
        return $this->due_date;
    }

    public function setDueDate(\DateTimeInterface $due_date): self
    {
        $this->due_date = $due_date;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->tatus = $status;

        return $this;
    }
    public function getPhotoBefore(): ?string
    {
        return $this->photo_before;
    }

    public function setPhotoBefore(?string $photo_before): self
    {
        $this->photo_before = $photo_before;

        return $this;
    }

    public function getPhotoAfter(): ?string
    {
        return $this->photo_after;
    }

    public function setPhotoAfter(?string $photo_after): self
    {
        $this->photo_after = $photo_after;

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

    /**
     * @return Collection<int, Waste>
     */
    public function getWastes(): Collection
    {
        return $this->wastes;
    }

    public function addWaste(Waste $waste): self
    {
        if (!$this->wastes->contains($waste)) {
            $this->wastes[] = $waste;
            $waste->addWaste($this);
        }

        return $this;
    }

    public function removeWaste(Waste $waste): self
    {
        if ($this->wastes->removeElement($waste)) {
            $waste->removeWaste($this);
        }

        return $this;
    }

    public function getFinding(): ?string
    {
        return $this->finding;
    }

    public function setFinding(string $finding): self
    {
        $this->finding = $finding;

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
            $resp->addAction($this);
        }

        return $this;
    }

    public function removeResp(Resp $resp): self
    {
        if ($this->resps->removeElement($resp)) {
            $resp->removeAction($this);
        }

        return $this;
    }



    
}
