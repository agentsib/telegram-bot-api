<?php


namespace AgentSIB\Telegram\Payload;


interface PayloadResponseInterface
{
    /**
     * @return boolean
     */
    public function isOk ();

    /**
     * @return mixed
     */
    public function getResult ();

    /**
     * @return int
     */
    public function getErrorCode ();
    /**
     * @return string
     */
    public function getDescription ();
}