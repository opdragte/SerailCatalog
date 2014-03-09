<?php

namespace WOTW\Bundle\SerialCatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="WOTW\Bundle\SerialCatalogBundle\Entity\GenreRepository")
 */
class Genre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=30)
     */
    private $title;

    /**
     *
     * @ORM\OneToMany(targetEntity="Serial", mappedBy="genre")
     */
    private $serials;

    public function __construct()
    {
        $this->serials = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Genre
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param ArrayCollection $serials
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function setSerials(ArrayCollection $serials)
    {
        $this->serials = $serials;

        return $this;
    }

    /**
     * Get serials
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSerials()
    {
        return $this->serials;
    }
}
