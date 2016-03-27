<?php


namespace AgentSIB\Telegram\Model;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This object represent a user's profile pictures.
 *
 * @package AgentSIB\Telegram\Model
 */
class UserProfilePhotos extends AbstractModel
{
    /** @var  integer */
    protected $totalCount;

    /** @var  ArrayCollection[]|PhotoSize[][] */
    protected $photos;

    /**
     * @return int Total number of profile pictures the target user has
     */
    public function getTotalCount ()
    {
        return $this->totalCount;
    }

    /**
     * @return ArrayCollection[]|PhotoSize[][] Requested profile pictures (in up to 4 sizes each)
     */
    public function getPhotos ()
    {
        return $this->photos;
    }
}