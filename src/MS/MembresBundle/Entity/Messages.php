<?php

namespace MS\\MembresBundle\\;

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


}
