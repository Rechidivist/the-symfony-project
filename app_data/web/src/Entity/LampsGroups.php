<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LampsGroups
 *
 * @ORM\Table(name="Lamps_Groups", indexes={@ORM\Index(name="FK_Lamps_Groups_Groups", columns={"id_group"}), @ORM\Index(name="FK_Lamps_Groups_Lamps", columns={"id_lamp"})})
 * @ORM\Entity
 */
class LampsGroups
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
     *   @ORM\JoinColumn(name="id_group", referencedColumnName="id")
     * })
     */
    private $idGroup;

    /**
     * @var \Lamps
     *
     * @ORM\ManyToOne(targetEntity="Lamps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lamp", referencedColumnName="id")
     * })
     */
    private $idLamp;

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

    public function getIdLamp(): ?Lamps
    {
        return $this->idLamp;
    }

    public function setIdLamp(?Lamps $idLamp): self
    {
        $this->idLamp = $idLamp;

        return $this;
    }


}
