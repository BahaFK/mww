<?php
// api/src/Entity/Resp.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * A responsible.
 *
 * @ORM\Entity
 * @ApiResource(
 *     formats={"json"},
 *     normalizationContext={"groups"={"resp:read"}},
 *     denormalizationContext={"groups"={"resp:write"}},
 *     )
 * @ApiFilter(SearchFilter::class, properties={"id":"exact", "name":"ipartial"})
 */
#[ApiResource]
class Resp
{
    /**
     * The id of this responsible.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"resp:read"})
     */
    private ?int $id = null;


    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"resp:read"})
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"resp:read"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"resp:read"})
     */
    private $mail;

    /**
     * @ORM\ManyToMany(targetEntity=Action::class, inversedBy="resps")
     */
    private $actions;

    /**
     * @ORM\ManyToOne(targetEntity=Area::class, inversedBy="resps")
     */
    private $areas;

    /**
     * @ORM\ManyToOne(targetEntity=Unit::class, inversedBy="resps")
     */
    private $units;

    /**
     * @ORM\ManyToOne(targetEntity=Section::class, inversedBy="resps")
     */
    private $sections;

    /**
     * @ORM\Column(type="boolean")
     */
    private $manager;

    public function __construct()
    {
        $this->actions = new ArrayCollection();
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function __toString()
    {
        return $this->ref;

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
        }

        return $this;
    }

    public function removeAction(Action $action): self
    {
        $this->actions->removeElement($action);

        return $this;
    }

    public function getAreas(): ?Area
    {
        return $this->areas;
    }

    public function setAreas(?Area $areas): self
    {
        $this->areas = $areas;

        return $this;
    }

    public function getUnits(): ?Unit
    {
        return $this->units;
    }

    public function setUnits(?Unit $units): self
    {
        $this->units = $units;

        return $this;
    }

    public function getSections(): ?Section
    {
        return $this->sections;
    }

    public function setSections(?Section $sections): self
    {
        $this->sections = $sections;

        return $this;
    }

    public function getManager(): ?bool
    {
        return $this->manager;
    }

    public function setManager(bool $manager): self
    {
        $this->manager = $manager;

        return $this;
    }
}
