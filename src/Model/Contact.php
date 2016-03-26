<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a phone contact.
 *
 * @package AgentSIB\Telegram\Model
 */
class Contact extends AbstractModel
{
    /** @var  string */
    protected $phoneNumber;

    /** @var  string */
    protected $firstName;

    /** @var  string */
    protected $lastName;

    /** @var  integer */
    protected $userId;

    /**
     * @return string Contact's phone number
     */
    public function getPhoneNumber ()
    {
        return $this->phoneNumber;
    }

    /**
     * @return string Contact's first name
     */
    public function getFirstName ()
    {
        return $this->firstName;
    }

    /**
     * @return string Optional. Contact's last name
     */
    public function getLastName ()
    {
        return $this->lastName;
    }

    /**
     * @return int Optional. Contact's user identifier in Telegram
     */
    public function getUserId ()
    {
        return $this->userId;
    }
}
