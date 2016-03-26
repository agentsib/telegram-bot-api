<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents an incoming update.
 * Only one of the optional parameters can be present in any given update
 *
 * @package AgentSIB\Telegram\Model
 */
class Update extends AbstractModel
{
    /** @var  integer */
    protected $updateId;

    /** @var  Message */
    protected $message;

    /** @var  InlineQuery */
    protected $inlineQuery;

    /** @var  ChosenInlineResult */
    protected $chosenInlineResult;

    /**
     * @return int The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order.
     */
    public function getUpdateId ()
    {
        return $this->updateId;
    }

    /**
     * @return Message Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    public function getMessage ()
    {
        return $this->message;
    }

    /**
     * @return InlineQuery Optional. New incoming inline query
     */
    public function getInlineQuery ()
    {
        return $this->inlineQuery;
    }

    /**
     * @return ChosenInlineResult Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     */
    public function getChosenInlineResult ()
    {
        return $this->chosenInlineResult;
    }


}