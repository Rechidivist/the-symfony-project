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
     * @var string|null
     *
     * @ORM\Column(name="position", type="text", length=65535, nullable=true)
     */
    private $position;

    /**
     * @ORM\Column(type="integer")
     */
    private $gate;

    public function getGate(): ?int
    {
        return $this->gate;
    }

    public function setGate(int $gate): self
    {
        $this->gate = $gate;

        return $this;
    }


}
