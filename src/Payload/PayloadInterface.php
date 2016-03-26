<?php


namespace AgentSIB\Telegram\Payload;


interface PayloadInterface
{
    /**
     * @return string API method
     */
    public function getMethod();

    /**
     * @return string Class for payload response
     */
    public function getPayloadClass();
}