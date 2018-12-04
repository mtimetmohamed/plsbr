<?php

namespace messanger\chatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersTable
 *
 * @ORM\Table(name="users_table")
 * @ORM\Entity
 */
class UsersTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Users_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usersId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_fname", type="string", length=255, nullable=false)
     */
    private $userFname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_lname", type="string", length=255, nullable=false)
     */
    private $userLname;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="Profile_Picture", type="string", length=255, nullable=false)
     */
    private $profilePicture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';


}

