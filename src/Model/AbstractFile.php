<?php


namespace AgentSIB\Telegram\Model;

/**
 * @package AgentSIB\Telegram\Model
 */
abstract class AbstractFile extends AbstractModel
{
    /** @var  string */
    protected $fileId;

    /** @var  integer */
    protected $fileSize;

    /**
     * @return string Unique identifier for this file
     */
    public function getFileId ()
    {
        return $this->fileId;
    }

    /**
     * @return int Optional. File size
     */
    public function getFileSize ()
    {
        return $this->fileSize;
    }
}