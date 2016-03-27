<?php


namespace AgentSIB\Telegram\Payload;


use AgentSIB\Telegram\Model\Update;
use Doctrine\Common\Collections\ArrayCollection;

class GetUpdatesPayloadResponse
{
    private $result;

    /**
     * @return ArrayCollection|Update[]
     */
    public function getResult ()
    {
        return $this->result;
    }
}