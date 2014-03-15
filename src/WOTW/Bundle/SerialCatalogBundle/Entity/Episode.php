<?php

namespace WOTW\Bundle\SerialCatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vlabs\MediaBundle\Annotation\Vlabs;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="WOTW\Bundle\SerialCatalogBundle\Entity\EpisodeRepository")
 */
class Episode
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
     * @var VlabsFile
     *
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinColumns({
     *    @ORM\JoinColumn(name="image", referencedColumnName="id")
     * })
     *
     * @Vlabs\Media(identifier="image_entity", upload_dir="media/images")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="videoQuality", type="string", length=70)
     */
    private $videoQuality;

    /**
     * @var string
     *
     * @ORM\Column(name="audioQuality", type="string", length=70)
     */
    private $audioQuality;

    /**
     * @var string
     *
     * @ORM\Column(name="releaseDate", type="string", length=70)
     */
    private $releaseDate;

    /**
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="episodes")
     */
    private $season;


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
     * @return Episode
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
     * @param \WOTW\Bundle\SerialCatalogBundle\Entity\Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \WOTW\Bundle\SerialCatalogBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }



//    /**
//     * Set image
//     *
//     * @param string $image
//     * @return Episode
//     */
//    public function setImage($image)
//    {
//        $this->image = $image;
//
//        return $this;
//    }
//
//    /**
//     * Get image
//     *
//     * @return string
//     */
//    public function getImage()
//    {
//        return $this->image;
//    }

    /**
     * Set videoQuality
     *
     * @param string $videoQuality
     * @return Episode
     */
    public function setVideoQuality($videoQuality)
    {
        $this->videoQuality = $videoQuality;

        return $this;
    }

    /**
     * Get videoQuality
     *
     * @return string 
     */
    public function getVideoQuality()
    {
        return $this->videoQuality;
    }

    /**
     * Set audioQuality
     *
     * @param string $audioQuality
     * @return Episode
     */
    public function setAudioQuality($audioQuality)
    {
        $this->audioQuality = $audioQuality;

        return $this;
    }

    /**
     * Get audioQuality
     *
     * @return string 
     */
    public function getAudioQuality()
    {
        return $this->audioQuality;
    }

    /**
     * Set releaseDate
     *
     * @param string $releaseDate
     * @return Episode
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return string 
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set season
     *
     * @param string $season
     * @return Episode
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string 
     */
    public function getSeason()
    {
        return $this->season;
    }
}
