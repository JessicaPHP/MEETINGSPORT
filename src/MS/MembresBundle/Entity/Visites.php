<?php

namespace MS\\MembresBundle\\;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visites
 *
 * @ORM\Table(name="visites", indexes={@ORM\Index(name="id_envoyeur", columns={"id_envoyeur"}), @ORM\Index(name="id_receveur", columns={"id_receveur"})})
 * @ORM\Entity
 */
class Visites
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
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="Membres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_receveur", referencedColumnName="id")
     * })
     */
    private $idReceveur;

    /**
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="Membres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_envoyeur", referencedColumnName="id")
     * })
     */
    private $idEnvoyeur;


}

