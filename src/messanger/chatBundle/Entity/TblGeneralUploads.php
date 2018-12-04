<?php

namespace messanger\chatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGeneralUploads
 *
 * @ORM\Table(name="tbl_general_uploads")
 * @ORM\Entity
 */
class TblGeneralUploads
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
     * @ORM\Column(name="file_name", type="string", length=100, nullable=false)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="file_type", type="string", length=100, nullable=false)
     */
    private $fileType;

    /**
     * @var string
     *
     * @ORM\Column(name="file_size", type="string", length=100, nullable=false)
     */
    private $fileSize;

    /**
     * @var string
     *
     * @ORM\Column(name="file_path", type="string", length=200, nullable=false)
     */
    private $filePath;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';


}

