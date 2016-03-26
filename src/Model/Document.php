<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @package AgentSIB\Telegram\Model
 */
class Document extends AbstractFile
{
    /** @var  PhotoSize */
    protected $thumb;

    /** @var  string */
    protected $fileName;

    /** @var  string */
    protected $mimeType;

    /**
     * @return PhotoSize Optional. Document thumbnail as defined by sender
     */
    public function getThumb ()
    {
        return $this->thumb;
    }

    /**
     * @return string Optional. Original filename as defined by sender
     */
    public function getFileName ()
    {
        return $this->fileName;
    }

    /**
     * @return string Optional. MIME type of the file as defined by sender
     */
    public function getMimeType ()
    {
        return $this->mimeType;
    }

}
