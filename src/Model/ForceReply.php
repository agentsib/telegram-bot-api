<?php


namespace AgentSIB\Telegram\Model;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user
 * (act as if the user has selected the bot‘s message and tapped ’Reply'). This can be extremely useful
 * if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @package AgentSIB\Telegram\Model
 */
class ForceReply extends AbstractModel
{
    /** @var  boolean */
    protected $forceReply;

    /** @var  boolean */
    protected $selective;

    /**
     * @return boolean Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply'
     */
    public function isForceReply ()
    {
        return $this->forceReply;
    }

    /**
     * @return boolean Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public function isSelective ()
    {
        return $this->selective;
    }

}