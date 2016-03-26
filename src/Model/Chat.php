<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a chat.
 * 
 * @package AgentSIB\Telegram\Model
 */
class Chat extends AbstractModel
{
    /** @var  integer */
    protected $id;

    /** @var  string */
    protected $type;

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $username;

    /** @var  string */
    protected $firstName;

    /** @var  string */
    protected $lastName;

    /**
     * @return int Unique identifier for this chat, not exceeding 1e13 by absolute value
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @return string Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public function getType ()
    {
        return $this->type;
    }

    /**
     * @return string Optional. Title, for channels and group chats
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @return string Optional. Username, for private chats and channels if available
     */
    public function getUsername ()
    {
        return $this->username;
    }

    /**
     * @return string Optional. First name of the other party in a private chat
     */
    public function getFirstName ()
    {
        return $this->firstName;
    }

    /**
     * @return string Optional. Last name of the other party in a private chat
     */
    public function getLastName ()
    {
        return $this->lastName;
    }
}
