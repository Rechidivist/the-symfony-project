<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lamps
 *
 * @ORM\Table(name="Lamps")
 * @ORM\Entity
 */
class Lamps
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
     * @var float|null
     *
     * @ORM\Column(name="position_x", type="float", nullable=true)
     */
    private $position_x;

    /**
     * @var float|null
     *
     * @ORM\Column(name="position_y", type="float", nullable=true)
     */
    private $position_y;


    /**
     * @ORM\Column(type="integer")
     */
    private $gate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $power;

    /**
     * @ORM\Column(type="integer")
     */
    private $brightness;

    public function getGate(): ?int
    {
        return $this->gate;
    }

    public function setGate(int $gate): self
    {
        $this->gate = $gate;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPositionX(): ?float
    {
        return $this->position_x;
    }

    public function setPositionX(?float $position_x): self
    {
        $this->position_x = $position_x;

        return $this;
    }

    public function getPositionY(): ?float
    {
        return $this->position_y;
    }

    public function setPositionY(?float $position_y): self
    {
        $this->position_y = $position_y;

        return $this;
    }

    public function getPower(): ?bool
    {
        return $this->power;
    }

    public function setPower(bool $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getBrightness(): ?int
    {
        return $this->brightness;
    }

    public function setBrightness(int $brightness): self
    {
        $this->brightness = $brightness;

        return $this;
    }


}
