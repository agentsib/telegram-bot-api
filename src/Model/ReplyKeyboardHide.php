<?php


namespace AgentSIB\Telegram\Model;

/**
 * Upon receiving a message with this object, Telegram clients will hide the current custom keyboard
 * and display the default letter-keyboard. By default, custom keyboards are displayed until a new
 * keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately
 * after the user presses a button (see ReplyKeyboardMarkup).
 *
 * @package AgentSIB\Telegram\Model
 */
class ReplyKeyboardHide extends AbstractModel
{
    /** @var  boolean */
    protected $hideKeyboard;

    /** @var  boolean */
    protected $selective;

    /**
     * @return boolean Requests clients to hide the custom keyboard
     */
    public function isHideKeyboard ()
    {
        return $this->hideKeyboard;
    }

    /**
     * Example: A user requests to change the bot‘s language, bot replies to the request with a keyboard to select the new language. Other users in the group don’t see the keyboard.
     * 
     * @return boolean Optional. Use this parameter if you want to hide keyboard for specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public function isSelective ()
    {
        return $this->selective;
    }
}