<?php

namespace Test\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichiers
 *
 * @ORM\Table(name="fichiers", indexes={@ORM\Index(name="id_message", columns={"idMessage"})})
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
     * @ORM\Column(name="dateEvent", type="datetime", nullable=false)
     */
    private $dateevent;

    /**
     * @var \Messages
     *
     * @ORM\ManyToOne(targetEntity="Messages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMessage", referencedColumnName="id")
     * })
     */
    private $idmessage;



    /**
     * Set dateevent
     *
     * @param \DateTime $dateevent
     *
     * @return Fichiers
     */
    public function setDateevent($dateevent)
    {
        $this->dateevent = $dateevent;

        return $this;
    }

    /**
     * Get dateevent
     *
     * @return \DateTime
     */
    public function getDateevent()
    {
        return $this->dateevent;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idmessage
     *
     * @param \Test\CrudBundle\Entity\Messages $idmessage
     *
     * @return Fichiers
     */
    public function setIdmessage(\Test\CrudBundle\Entity\Messages $idmessage = null)
    {
        $this->idmessage = $idmessage;

        return $this;
    }

    /**
     * Get idmessage
     *
     * @return \Test\CrudBundle\Entity\Messages
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }
}
