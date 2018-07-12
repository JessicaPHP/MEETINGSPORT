<?php

namespace Test\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversations
 *
 * @ORM\Table(name="conversations", indexes={@ORM\Index(name="id_sport", columns={"idSport"})})
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
     * @ORM\Column(name="dateEvent", type="datetime", nullable=false)
     */
    private $dateevent;

    /**
     * @var \Sports
     *
     * @ORM\ManyToOne(targetEntity="Sports")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSport", referencedColumnName="id")
     * })
     */
    private $idsport;



    /**
     * Set dateevent
     *
     * @param \DateTime $dateevent
     *
     * @return Conversations
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
     * Set idsport
     *
     * @param \Test\CrudBundle\Entity\Sports $idsport
     *
     * @return Conversations
     */
    public function setIdsport(\Test\CrudBundle\Entity\Sports $idsport = null)
    {
        $this->idsport = $idsport;

        return $this;
    }

    /**
     * Get idsport
     *
     * @return \Test\CrudBundle\Entity\Sports
     */
    public function getIdsport()
    {
        return $this->idsport;
    }
}
