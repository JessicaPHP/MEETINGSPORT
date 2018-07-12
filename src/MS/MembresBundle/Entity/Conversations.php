<?php

namespace MS\\MembresBundle\\;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversations
 *
 * @ORM\Table(name="conversations", indexes={@ORM\Index(name="id_sport", columns={"id_sport"})})
 * @ORM\Entity
 */
class Conversations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \Sports
     *
     * @ORM\ManyToOne(targetEntity="Sports")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sport", referencedColumnName="id")
     * })
     */
    private $idSport;


}

