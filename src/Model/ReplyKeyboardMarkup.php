<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 *
 * @package AgentSIB\Telegram\Model
 */
class ReplyKeyboardMarkup extends AbstractModel
{
    /** @var  string[][] */
    protected $keyboard;

    /** @var  boolean */
    protected $resizeKeyboard;

    /** @var  boolean */
    protected $oneTimeKeyboard;

    /** @var  boolean */
    protected $selective;

    /**
     * @return string[][] Array of button rows, each represented by an Array of Strings
     */
    public function getKeyboard ()
    {
        return $this->keyboard;
    }

    /**
     * @return boolean Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    public function isResizeKeyboard ()
    {
        return $this->resizeKeyboard;
    }

    /**
     * @return boolean Optional. Requests clients to hide the keyboard as soon as it's been used. Defaults to false.
     */
    public function isOneTimeKeyboard ()
    {
        return $this->oneTimeKeyboard;
    }

    /**
     * Example: A user votes in a poll, bot returns confirmation message in reply to the vote and hides keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.
     *
     * @return boolean Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public function isSelective ()
    {
        return $this->selective;
    }
}