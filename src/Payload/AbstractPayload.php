<?php


namespace AgentSIB\Telegram\Payload;


abstract class AbstractPayload implements PayloadInterface
{
    /**
     * @inheritdoc
     */
    public function getPayloadClass ()
    {
        return sprintf('%sResponse', get_called_class());
    }

    public function getPayloadType ()
    {
        return self::TYPE_JSON;
    }


}