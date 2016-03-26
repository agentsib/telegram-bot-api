<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 * 
 * @package AgentSIB\Telegram\Model
 */
class PhotoSize extends AbstractFile
{
    /** @var  integer */
    protected $width;

    /** @var  integer */
    protected $height;

    /**
     * @return int Photo width
     */
    public function getWidth ()
    {
        return $this->width;
    }

    /**
     * @return int Photo height
     */
    public function getHeight ()
    {
        return $this->height;
    }
}
