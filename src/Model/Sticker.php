<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a sticker.
 *
 * @package AgentSIB\Telegram\Model
 */
class Sticker extends AbstractFile
{
    /** @var  integer */
    protected $width;

    /** @var  integer */
    protected $height;

    /** @var  PhotoSize */
    protected $thumb;

    /**
     * @return int Sticker width
     */
    public function getWidth ()
    {
        return $this->width;
    }

    /**
     * @return int Sticker height
     */
    public function getHeight ()
    {
        return $this->height;
    }

    /**
     * @return PhotoSize Optional. Sticker thumbnail in .webp or .jpg format
     */
    public function getThumb ()
    {
        return $this->thumb;
    }

}
