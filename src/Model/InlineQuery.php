<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @package AgentSIB\Telegram\Model
 */
class InlineQuery extends AbstractModel
{
    /** @var  string */
    protected $id;

    /** @var  User */
    protected $from;

    /** @var  string */
    protected $query;

    /** @var  string */
    protected $offset;

    /**
     * @return string Unique identifier for this query
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @return User Sender
     */
    public function getFrom ()
    {
        return $this->from;
    }

    /**
     * @return string Text of the query
     */
    public function getQuery ()
    {
        return $this->query;
    }

    /**
     * @return string Offset of the results to be returned, can be controlled by the bot
     */
    public function getOffset ()
    {
        return $this->offset;
    }
}