<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchedulingLamps
 *
 * @ORM\Table(name="Scheduling_Lamps")
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
     * @var int|null
     *
     * @ORM\Column(name="id_Lamp", type="integer", nullable=true)
     */
    private $idLamp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Scheduling", type="integer", nullable=true)
     */
    private $idScheduling;


}
