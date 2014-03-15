<?php

namespace WOTW\Bundle\SerialCatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season")
 * @ORM\Entity(repositoryClass="WOTW\Bundle\SerialCatalogBundle\Entity\SeasonRepository")
 */
class Season
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
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="releaseBegin", type="string", length=70)
     */
    private $releaseBegin;

    /**
     * @var string
     *
     * @ORM\Column(name="releaseEnd", type="string", length=70)
     */
    private $releaseEnd;

    /**
     *
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="season")
     */
    private $episodes;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Serial", inversedBy="seasons")
     */
    private $serial;


    public function __construct()
    {
        $this->episodes = new ArrayCollection();
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
     * @return Season
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
     * Set releaseBegin
     *
     * @param string $releaseBegin
     * @return Season
     */
    public function setReleaseBegin($releaseBegin)
    {
        $this->releaseBegin = $releaseBegin;

        return $this;
    }

    /**
     * Get releaseBegin
     *
     * @return string 
     */
    public function getReleaseBegin()
    {
        return $this->releaseBegin;
    }

    /**
     * Set releaseEnd
     *
     * @param string $releaseEnd
     * @return Season
     */
    public function setReleaseEnd($releaseEnd)
    {
        $this->releaseEnd = $releaseEnd;

        return $this;
    }

    /**
     * Get releaseEnd
     *
     * @return string 
     */
    public function getReleaseEnd()
    {
        return $this->releaseEnd;
    }

    /**
     *
     * @param ArrayCollection $episodes
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function setEpisodes(ArrayCollection $episodes)
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return Season
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    public function __toString()
    {
        return $this->getTitle();
    }
}
