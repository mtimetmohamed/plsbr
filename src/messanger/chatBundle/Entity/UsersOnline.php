<?php

namespace messanger\chatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersOnline
 *
 * @ORM\Table(name="users_online")
 * @ORM\Entity
 */
class UsersOnline
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Time", type="datetime", nullable=false)
     */
    private $time = 'CURRENT_TIMESTAMP';


}

