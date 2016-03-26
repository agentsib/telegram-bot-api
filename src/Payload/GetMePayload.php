<?php


namespace AgentSIB\Telegram\Payload;

/**
 * A simple method for testing your bot's auth token. Requires no parameters. Returns basic information about the bot in form of a User object.
 * 
 * @package AgentSIB\Telegram\Payload
 */
class GetMePayload extends AbstractPayload
{
    public function getMethod ()
    {
        return 'getMe';
    }

}