<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchedulingGroups
 *
 * @ORM\Table(name="Scheduling_Groups")
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
     * @var int|null
     *
     * @ORM\Column(name="id_Group", type="integer", nullable=true)
     */
    private $idGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Scheduling", type="integer", nullable=true)
     */
    private $idScheduling;


}
