<?php

namespace Test\CrudBundle\Entity;

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



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Visites
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
     * Set idReceveur
     *
     * @param \Test\CrudBundle\Entity\Membres $idReceveur
     *
     * @return Visites
     */
    public function setIdReceveur(\Test\CrudBundle\Entity\Membres $idReceveur = null)
    {
        $this->idReceveur = $idReceveur;

        return $this;
    }

    /**
     * Get idReceveur
     *
     * @return \Test\CrudBundle\Entity\Membres
     */
    public function getIdReceveur()
    {
        return $this->idReceveur;
    }

    /**
     * Set idEnvoyeur
     *
     * @param \Test\CrudBundle\Entity\Membres $idEnvoyeur
     *
     * @return Visites
     */
    public function setIdEnvoyeur(\Test\CrudBundle\Entity\Membres $idEnvoyeur = null)
    {
        $this->idEnvoyeur = $idEnvoyeur;

        return $this;
    }

    /**
     * Get idEnvoyeur
     *
     * @return \Test\CrudBundle\Entity\Membres
     */
    public function getIdEnvoyeur()
    {
        return $this->idEnvoyeur;
    }
}
