<?php

namespace messanger\chatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delegue
 *
 * @ORM\Table(name="delegue", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Delegue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleguation_id", type="integer", nullable=false)
     */
    private $deleguationId;

    /**
     * @var string
     *
     * @ORM\Column(name="deleguation_name", type="string", length=255, nullable=false)
     */
    private $deleguationName;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleguation_member", type="integer", nullable=false)
     */
    private $deleguationMember;


}

