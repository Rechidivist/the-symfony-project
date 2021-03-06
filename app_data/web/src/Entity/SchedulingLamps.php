<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchedulingLamps
 *
 * @ORM\Table(name="Scheduling_Lamps", indexes={@ORM\Index(name="FK_Scheduling_Lamps_Lamps", columns={"id_Lamp"}), @ORM\Index(name="FK_Scheduling_Lamps_Scheduling", columns={"id_Scheduling"})})
 * @ORM\Entity
 */
class SchedulingLamps
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
     * @var \Lamps
     *
     * @ORM\ManyToOne(targetEntity="Lamps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Lamp", referencedColumnName="id")
     * })
     */
    private $idLamp;

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

    public function getIdLamp(): ?Lamps
    {
        return $this->idLamp;
    }

    public function setIdLamp(?Lamps $idLamp): self
    {
        $this->idLamp = $idLamp;

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
