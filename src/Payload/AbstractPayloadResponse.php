<?php


namespace AgentSIB\Telegram\Payload;


abstract class AbstractPayloadResponse implements PayloadResponseInterface
{
    /** @var  boolean */
    protected $ok;

    /** @var  integer */
    protected $error_code;

    /** @var  string */
    protected $description;

    /**
     * @return boolean
     */
    public function isOk ()
    {
        return $this->ok;
    }

    /**
     * @return int
     */
    public function getErrorCode ()
    {
        return $this->error_code;
    }

    /**
     * @return string
     */
    public function getDescription ()
    {
        return $this->description;
    }
}