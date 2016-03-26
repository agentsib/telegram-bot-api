<?php


namespace AgentSIB\Telegram\Payload;

use AgentSIB\Telegram\Model\User;

/**
 * @package AgentSIB\Telegram\Payload
 */
class GetMePayloadResponse extends AbstractPayloadResponse
{
    private $result;

    /**
     * @return User
     */
    public function getResult ()
    {
        return $this->result;
    }
}