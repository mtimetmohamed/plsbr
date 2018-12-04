<?php

namespace messanger\chatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicMessages
 *
 * @ORM\Table(name="public_messages")
 * @ORM\Entity
 */
class PublicMessages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Msg_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;

    /**
     * @var string
     *
     * @ORM\Column(name="Sender", type="text", length=255, nullable=false)
     */
    private $sender;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';


}

