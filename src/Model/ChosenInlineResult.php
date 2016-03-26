<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @package AgentSIB\Telegram\Model
 */
class ChosenInlineResult extends AbstractModel
{
    /** @var  string */
    protected $resultId;

    /** @var  User */
    protected $from;

    /** @var  string */
    protected $query;

    /**
     * @return string The unique identifier for the result that was chosen.
     */
    public function getResultId ()
    {
        return $this->resultId;
    }

    /**
     * @return User The user that chose the result.
     */
    public function getFrom ()
    {
        return $this->from;
    }

    /**
     * @return string The query that was used to obtain the result.
     */
    public function getQuery ()
    {
        return $this->query;
    }
}