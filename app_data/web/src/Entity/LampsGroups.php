<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LampsGroups
 *
 * @ORM\Table(name="Lamps_Groups")
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
     * @var int|null
     *
     * @ORM\Column(name="id_group", type="integer", nullable=true)
     */
    private $idGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_lamp", type="integer", nullable=true)
     */
    private $idLamp;


}
