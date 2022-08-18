<?php
// api/src/Entity/Action.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Controller\ActionController;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\ActionRepository;



/**
 * An action.
 *
 * @ORM\Entity(repositoryClass=ActionRepository::class)

 * @ApiFilter(SearchFilter::class, properties={"id":"exact", "date":"ipartial", "dueDate":"ipartial", "week":"ipartial"})
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"action:read"}},
 *     denormalizationContext={"groups"={"action:write"}},
 *     attributes={"order"={"updatedAt": "DESC"}},
 *     collectionOperations={
 *     "get",
 *     "post" = {
 *       "controller" = ActionController::class,
 *       "validate"=false,
 *       "deserialize" = false,
 *       "openapi_context" = {
 *         "requestBody" = {
 *           "description" = "File upload to an existing resource (superheroes)",
 *           "required" = true,
 *           "content" = {
 *             "multipart/form-data" = {
 *               "schema" = {
 *                 "type" = "object",
 *                 "properties" = {
 *                   "area" = {
 *                     "description" = "The name of the superhero",
 *                     "type" = "string",
 *                     "example" = "1",
 *                   },
 *                   "date" = {
 *                     "description" = "The name of the superhero",
 *                     "type" = "string",
 *                     "example" = "2022-05-19T23:00:00.000Z",
 *                   },
 *                   "description" = {
 *                     "description" = "The slug of the superhero",
 *                     "type" = "string",
 *                     "example" = "superman",
 *                   },
 *                   "dueDate" = {
 *                     "description" = "Whether this superhero should be featured or not",
 *                     "type" = "string",
 *                     "example" = "2022-05-19T23:00:00.000Z",
 *                   },
 *                   "finding" = {
 *                     "description" = "Whether this superhero should be featured or not",
 *                     "type" = "string",
 *                     "example" = "superman",
 *                   },
 *                   "week" = {
 *                     "description" = "Whether this superhero should be featured or not",
 *                     "type" = "string",
 *                     "example" = "superman",
 *                   },
 *                   "photoBefore" = {
 *                     "type" = "string",
 *                     "format" = "binary",
 *                     "description" = "Upload a cover image of the superhero",
 *                   },
 *                 },
 *               },
 *             },
 *           },
 *         },
 *       },
 *     },
 *   },
 *     itemOperations={
 *     "get",
 *     "patch",
 *     "delete",
 *     "put",
 *     "get_one" = {
 *       "method" = "GET",
 *       "path" = "/get-action/{id}",
 *       "controller" = ActionController::class,
 *       "read"=false,
 *       "openapi_context" = {
 *         "parameters" = {
 *           {
 *             "name" = "id",
 *             "in" = "path",
 *             "description" = "id of the action",
 *             "type" = "string",
 *             "required" = true,
 *             "example"= "1",
 *           },
 *         },
 *       },
 *     },
 *     },
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
         * @Groups({"action:read"})
         */
    private ?int $id ;



   /**
    * @ORM\ManyToOne(targetEntity=Area::class, inversedBy="actions")
    * @ORM\JoinColumn(nullable=false)
    * @Groups({"action:read","action:write"})
    */
   private $area;



    /**
     * @ORM\ManyToMany(targetEntity=Waste::class, mappedBy="waste")
     */
    private $wastes;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"action:read","action:write"})
     */
    private $week;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"action:read","action:write"})
     */
    private $date;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"action:read","action:write"})
     */
    private $dueDate;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"action:read","action:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"action:read","action:write"})
     */
    private $status;

    /**
     * @ORM\Column(type="json",  nullable=true)
     * @Groups({"action:read","action:write"})
     * @ApiProperty(
     *   iri="http://schema.org/image",
     *   attributes={
     *     "openapi_context"={
     *       "type"="string",
     *     }
     *   }
     * )
     */
    private $photo_before;

    /**
     * @ORM\Column(type="json", nullable=true)
     * @Groups({"action:read","action:write"})
     */
    private $photo_after;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="create")
     * @Groups({"action:read"})
     */
        
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     * @Gedmo\Timestampable(on="update")
     * @Groups({"action:read"})
     */
    private $updatedAt;


    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"action:read","action:write"})
     */
    private $finding;

    /**
     * @ORM\ManyToMany(targetEntity=Resp::class, mappedBy="actions")
     * @Groups({"action:write"})
     */
    private $resps;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"action:read","action:write"})
     */
    private $validationDescription;

    public function __construct()
    {
        $this->setStatus(25);
        $this->wastes = new ArrayCollection();
        $this->resps = new ArrayCollection();
    }
      

    public function getId(): ?int
    {
        return $this->id;
    }



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
        return $this->dueDate;
    }

    public function setDueDate(\DateTimeInterface $dueDate): self
    {
        $this->dueDate = $dueDate;

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
        $this->status = $status;

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function getPhotoBefore(): array
    {
        return  $this->photo_before;

    }

    public function setPhotoBefore(array $photo_befores): self
    {
        $this->photo_before = $photo_befores;

        return $this;
    }

    public function getPhotoAfter(): ?array
    {
        return $this->photo_after;
    }

    public function setPhotoAfter(?array $photo_after): self
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
            $waste->addAction($this);
        }

        return $this;
    }

    public function removeWaste(Waste $waste): self
    {
        if ($this->wastes->removeElement($waste)) {
            $waste->removeAction($this);
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

    /**
     * @Groups("action:read")
     */
    public function getRespsData(): string
    {

        return $this->resps->first()? $this->resps->first()->getName() : "";
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

    public function getValidationDescription(): ?string
    {
        return $this->validationDescription;
    }

    public function setValidationDescription(?string $validationDescription): self
    {
        $this->validationDescription = $validationDescription;

        return $this;
    }



    
}
