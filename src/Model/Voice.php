<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a voice note.
 *
 * @package AgentSIB\Telegram\Model
 */
class Voice extends AbstractFile
{
    /** @var  integer */
    protected $duration;

    /** @var  string */
    protected $mimeType;

    /**
     * @return int Duration of the audio in seconds as defined by sender
     */
    public function getDuration ()
    {
        return $this->duration;
    }

    /**
     * @return string Optional. MIME type of the file as defined by sender
     */
    public function getMimeType ()
    {
        return $this->mimeType;
    }
}