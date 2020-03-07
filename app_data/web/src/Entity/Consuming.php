<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consuming
 *
 * @ORM\Table(name="Consuming", indexes={@ORM\Index(name="FK_Consuming_Lamps", columns={"id_lamp"})})
 * @ORM\Entity
 */
class Consuming
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
     * @var int|null
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \Lamps
     *
     * @ORM\ManyToOne(targetEntity="Lamps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lamp", referencedColumnName="id")
     * })
     */
    private $idLamp;


}
