<?php
// api/src/Entity/action.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;



/**
 * An action.
 *
 * @ORM\Entity
 * @ApiResource(formats={"json"})
 * @ApiFilter(SearchFilter::class, properties={"id":"exact", "date":"ipartial", "due_date":"ipartial", "week":"ipartial"})

 */
#[ApiResource]
class action
{
        /**
         * The id of this action.
         *
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
    private ?int $id ;



   /**
    * @ORM\ManyToOne(targetEntity=finding::class, inversedBy="actions")
    * @ORM\JoinColumn(nullable=false)
    */
   private $findings;

   /**
    * @ORM\ManyToOne(targetEntity=area::class, inversedBy="actions")
    * @ORM\JoinColumn(nullable=false)
    */
   private $area;

      /**
    * @ORM\ManyToOne(targetEntity=resp::class, inversedBy="actions")
    * @ORM\JoinColumn(nullable=false)
    */
    private $resp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $week;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $due_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $plan_status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $do_status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $check_status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $act_status;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_before;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo_after;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="create")

     */
        
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="update")

     */
    private $updatedAt;
      

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFindings(): ?finding
    {
        return $this->findings;
    }

    public function setFindings(?finding $findings): self
    {
        $this->findings = $findings;

        return $this;
    }


    public function getArea(): ?area
    {
        return $this->area;

    }

    public function setArea(?area $area): self
    {
        $this->area = $area;

        return $this;
    }


    
    public function getResp(): ?resp
    {
        return $this->resp;

    }

    public function setResp(?resp $resp): self
    {
        $this->resp = $resp;

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

    public function getPlanStatus(): ?int
    {
        return $this->plan_status;
    }

    public function setPlanStatus(?int $plan_status): self
    {
        $this->plan_status = $plan_status;

        return $this;
    }

    public function getDoStatus(): ?int
    {
        return $this->do_status;
    }

    public function setDoStatus(?int $do_status): self
    {
        $this->do_status = $do_status;

        return $this;
    }

    public function getCheckStatus(): ?int
    {
        return $this->check_status;
    }

    public function setCheckStatus(?int $check_status): self
    {
        $this->check_status = $check_status;

        return $this;
    }

    public function getActStatus(): ?int
    {
        return $this->act_status;
    }

    public function setActStatus(?int $act_status): self
    {
        $this->act_status = $act_status;

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



    
}