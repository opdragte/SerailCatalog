<?php

namespace WOTW\Bundle\SerialCatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vlabs\MediaBundle\Entity\BaseFile as VlabsFile;

/**
 * Image
 *
 * @ORM\Table(name="vlabs_image")
 * @ORM\Entity
 */
class Image extends VlabsFile
{
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer")
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;


//    /**
//     * Get id
//     *
//     * @return integer
//     */
//    public function getId()
//    {
//        return $this->id;
//    }

    /**
     * Set path
     *
     * @param string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
}
