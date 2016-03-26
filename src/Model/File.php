<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link
 * https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be
 * valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @package AgentSIB\Telegram\Model
 */
class File extends AbstractFile
{
    /** @var  string */
    protected $filePath;

    /**
     * @return string Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    public function getFilePath ()
    {
        return $this->filePath;
    }

}