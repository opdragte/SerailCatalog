<?php

namespace WOTW\Bundle\SerialCatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Serial
 *
 * @ORM\Table(name="serial")
 * @ORM\Entity(repositoryClass="WOTW\Bundle\SerialCatalogBundle\Entity\SerialRepository")
 */
class Serial
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
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createdAt", type="datetime")
     *
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="releaseBegin", type="string", length=70)
     */
    private $releaseBegin;

    /**
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="serials")
     */
    private $genre;

    /**
     *
     * @ORM\OneToMany(targetEntity="Season", mappedBy="serial")
     */
    private $seasons;

    /**
     * @var string
     *
     * @ORM\Column(name="actors", type="text")
     */
    private $actors;

    public function __construct()
    {
        $this->seasons = new ArrayCollection();
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
     * @return Serial
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
     * Set description
     *
     * @param string $description
     * @return Serial
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set releaseBegin
     *
     * @param string $releaseBegin
     * @return Serial
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
     * @param ArrayCollection $seasons
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function setSeasons(ArrayCollection $seasons)
    {
        $this->seasons = $seasons;

        return $this;
    }

    /**
     * Get season
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * Set actors
     *
     * @param string $actors
     * @return Serial
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}
