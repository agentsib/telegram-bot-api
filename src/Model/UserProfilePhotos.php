<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represent a user's profile pictures.
 *
 * @package AgentSIB\Telegram\Model
 */
class UserProfilePhotos extends AbstractModel
{
    /** @var  integer */
    protected $totalCount;

    /** @var  PhotoSize[][] */
    protected $photos;

    /**
     * @return int Total number of profile pictures the target user has
     */
    public function getTotalCount ()
    {
        return $this->totalCount;
    }

    /**
     * @return PhotoSize[][] Requested profile pictures (in up to 4 sizes each)
     */
    public function getPhotos ()
    {
        return $this->photos;
    }
}