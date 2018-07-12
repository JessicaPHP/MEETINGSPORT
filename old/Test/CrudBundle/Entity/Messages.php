<?php

namespace Test\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages", indexes={@ORM\Index(name="id_envoyeur", columns={"id_envoyeur"}), @ORM\Index(name="id_conversation", columns={"id_conversation"}), @ORM\Index(name="id_receveur", columns={"id_receveur"})})
 * @ORM\Entity
 */
class Messages
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
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=250, nullable=false)
     */
    private $texte;

    /**
     * @var \Conversations
     *
     * @ORM\ManyToOne(targetEntity="Conversations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conversation", referencedColumnName="id")
     * })
     */
    private $idConversation;

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
     * @return Messages
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
     * Set texte
     *
     * @param string $texte
     *
     * @return Messages
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
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
     * Set idConversation
     *
     * @param \Test\CrudBundle\Entity\Conversations $idConversation
     *
     * @return Messages
     */
    public function setIdConversation(\Test\CrudBundle\Entity\Conversations $idConversation = null)
    {
        $this->idConversation = $idConversation;

        return $this;
    }

    /**
     * Get idConversation
     *
     * @return \Test\CrudBundle\Entity\Conversations
     */
    public function getIdConversation()
    {
        return $this->idConversation;
    }

    /**
     * Set idReceveur
     *
     * @param \Test\CrudBundle\Entity\Membres $idReceveur
     *
     * @return Messages
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
     * @return Messages
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
