<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scheduling
 *
 * @ORM\Table(name="Scheduling")
 * @ORM\Entity
 */
class Scheduling
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
     * @var \DateTime
     *
     * @ORM\Column(name="at", type="datetime", nullable=false)
     */
    private $at;

    /**
     * @var int
     *
     * @ORM\Column(name="period", type="integer", nullable=false, options={"comment":"'none','daily','weekly','monthly' - 1,2,3,4"})
     */
    private $period = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="parametr", type="integer", nullable=false, options={"comment":"'power','brightness' - 1,2"})
     */
    private $parametr = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAt(): ?\DateTimeInterface
    {
        return $this->at;
    }

    public function setAt(\DateTimeInterface $at): self
    {
        $this->at = $at;

        return $this;
    }

    public function getPeriod(): ?int
    {
        return $this->period;
    }

    public function setPeriod(int $period): self
    {
        $this->period = $period;

        return $this;
    }

    public function getParametr(): ?int
    {
        return $this->parametr;
    }

    public function setParametr(int $parametr): self
    {
        $this->parametr = $parametr;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }


}
