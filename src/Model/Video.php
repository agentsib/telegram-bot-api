<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a video file.
 *
 * @package AgentSIB\Telegram\Model
 */
class Video extends AbstractFile
{
    /** @var  integer */
    protected $width;

    /** @var  integer */
    protected $height;

    /** @var  integer */
    protected $duration;

    /** @var  PhotoSize */
    protected $thumb;

    /** @var  string */
    protected $mimeType;

    /**
     * @return int Video width as defined by sender
     */
    public function getWidth ()
    {
        return $this->width;
    }

    /**
     * @return int Video height as defined by sender
     */
    public function getHeight ()
    {
        return $this->height;
    }

    /**
     * @return int Duration of the video in seconds as defined by sender
     */
    public function getDuration ()
    {
        return $this->duration;
    }

    /**
     * @return PhotoSize Optional. Video thumbnail
     */
    public function getThumb ()
    {
        return $this->thumb;
    }

    /**
     * @return string Optional. Mime type of a file as defined by sender
     */
    public function getMimeType ()
    {
        return $this->mimeType;
    }

}
