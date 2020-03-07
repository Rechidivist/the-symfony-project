<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consuming
 *
 * @ORM\Table(name="Consuming")
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
     * @ORM\Column(name="id_lamp", type="integer", nullable=true)
     */
    private $idLamp;

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


}
