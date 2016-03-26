<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a Telegram user or bot.
 *
 * @package AgentSIB\Telegram\Model
 */
class User extends AbstractModel
{
    /** @var  integer */
    protected $id;

    /** @var  string */
    protected $firstName;

    /** @var  string */
    protected $lastName;

    /** @var  string */
    protected $username;

    /**
     * @return int Unique identifier for this user or bot
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @return string User‘s or bot’s first name
     */
    public function getFirstName ()
    {
        return $this->firstName;
    }

    /**
     * @return string Optional. User‘s or bot’s last name
     */
    public function getLastName ()
    {
        return $this->lastName;
    }

    /**
     * @return string Optional. User‘s or bot’s username
     */
    public function getUsername ()
    {
        return $this->username;
    }
}
