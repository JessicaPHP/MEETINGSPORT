<?php

namespace Test\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Balles
 *
 * @ORM\Table(name="balles", indexes={@ORM\Index(name="id_envoyeur", columns={"idEnvoyeur"}), @ORM\Index(name="id_receveur", columns={"idReceveur"})})
 * @ORM\Entity
 */
class Balles
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
     *   @ORM\JoinColumn(name="idReceveur", referencedColumnName="id")
     * })
     */
    private $idreceveur;

    /**
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="Membres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEnvoyeur", referencedColumnName="id")
     * })
     */
    private $idenvoyeur;



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Balles
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
     * Set idreceveur
     *
     * @param \Test\CrudBundle\Entity\Membres $idreceveur
     *
     * @return Balles
     */
    public function setIdreceveur(\Test\CrudBundle\Entity\Membres $idreceveur = null)
    {
        $this->idreceveur = $idreceveur;

        return $this;
    }

    /**
     * Get idreceveur
     *
     * @return \Test\CrudBundle\Entity\Membres
     */
    public function getIdreceveur()
    {
        return $this->idreceveur;
    }

    /**
     * Set idenvoyeur
     *
     * @param \Test\CrudBundle\Entity\Membres $idenvoyeur
     *
     * @return Balles
     */
    public function setIdenvoyeur(\Test\CrudBundle\Entity\Membres $idenvoyeur = null)
    {
        $this->idenvoyeur = $idenvoyeur;

        return $this;
    }

    /**
     * Get idenvoyeur
     *
     * @return \Test\CrudBundle\Entity\Membres
     */
    public function getIdenvoyeur()
    {
        return $this->idenvoyeur;
    }
}
