<?php


namespace AgentSIB\Telegram\Payload;


class SetWebhookPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var boolean
     */
    protected $result;

    /**
     * @return boolean
     */
    public function getResult ()
    {
        return $this->result;
    }

}