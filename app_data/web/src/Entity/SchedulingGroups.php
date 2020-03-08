<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchedulingGroups
 *
 * @ORM\Table(name="Scheduling_Groups", indexes={@ORM\Index(name="FK_Scheduling_Groups_Groups", columns={"id_Group"}), @ORM\Index(name="FK_Scheduling_Groups_Scheduling", columns={"id_Scheduling"})})
 * @ORM\Entity
 */
class SchedulingGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Group", referencedColumnName="id")
     * })
     */
    private $idGroup;

    /**
     * @var \Scheduling
     *
     * @ORM\ManyToOne(targetEntity="Scheduling")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Scheduling", referencedColumnName="id")
     * })
     */
    private $idScheduling;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdGroup(): ?Groups
    {
        return $this->idGroup;
    }

    public function setIdGroup(?Groups $idGroup): self
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    public function getIdScheduling(): ?Scheduling
    {
        return $this->idScheduling;
    }

    public function setIdScheduling(?Scheduling $idScheduling): self
    {
        $this->idScheduling = $idScheduling;

        return $this;
    }


}
