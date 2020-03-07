<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchedulingGroups
 *
 * @ORM\Table(name="Scheduling_Groups", indexes={@ORM\Index(name="FK_Scheduling_Groups_Groups", columns={"id_Group"}), @ORM\Index(name="FK_Scheduling_Groups_Scheduling", columns={"id_Scheduling"})})
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
     * @var \Groups
     *
     * @ORM\ManyToOne(targetEntity="Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Group", referencedColumnName="id")
     * })
     */
    private $idGroup;

    /**
     * @var \Scheduling
     *
     * @ORM\ManyToOne(targetEntity="Scheduling")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Scheduling", referencedColumnName="id")
     * })
     */
    private $idScheduling;


}
