<?php

namespace Login\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BestPlayer
 */
class BestPlayer
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $status;


    /**
     * Set image
     *
     * @param string $image
     * @return BestPlayer
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
