<?php


namespace AgentSIB\Telegram\Payload;


interface PayloadInterface
{
    const TYPE_JSON = 'json';
    const TYPE_MULTIPART = 'multipart';

    /**
     * @return string API method
     */
    public function getMethod();

    /**
     * @return string Class for payload response
     */
    public function getPayloadClass();

    /**
     * @return string Payload type
     */
    public function getPayloadType();
}