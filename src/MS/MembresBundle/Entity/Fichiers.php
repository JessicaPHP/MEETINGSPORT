<?php

namespace MS\\MembresBundle\\;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichiers
 *
 * @ORM\Table(name="fichiers", indexes={@ORM\Index(name="id_message", columns={"id_message"})})
 * @ORM\Entity
 */
class Fichiers
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
     * @var \Messages
     *
     * @ORM\ManyToOne(targetEntity="Messages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_message", referencedColumnName="id")
     * })
     */
    private $idMessage;


}

