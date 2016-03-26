<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @package AgentSIB\Telegram\Model
 */
class Audio extends AbstractFile
{
    /** @var  integer */
    protected $duration;

    /** @var  string */
    protected $performer;

    /** @var  string */
    protected $title;

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
     * @return string Optional. Performer of the audio as defined by sender or by audio tags
     */
    public function getPerformer ()
    {
        return $this->performer;
    }

    /**
     * @return string Optional. Title of the audio as defined by sender or by audio tags
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @return string Optional. MIME type of the file as defined by sender
     */
    public function getMimeType ()
    {
        return $this->mimeType;
    }
}
