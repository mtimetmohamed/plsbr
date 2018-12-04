<?php

namespace messanger\chatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersSecurityKeys
 *
 * @ORM\Table(name="users_security_keys")
 * @ORM\Entity
 */
class UsersSecurityKeys
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
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="users_fname", type="string", length=255, nullable=false)
     */
    private $usersFname;

    /**
     * @var string
     *
     * @ORM\Column(name="users_lname", type="string", length=255, nullable=false)
     */
    private $usersLname;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    private $status = 'not_used';


}

