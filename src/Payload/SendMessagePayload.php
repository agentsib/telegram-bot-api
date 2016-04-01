<?php


namespace AgentSIB\Telegram\Payload;


class SendMessagePayload extends AbstractPayload
{
    /** @var  integer|string */
    protected $chatId;

    /** @var  string */
    protected $text;

    /** @var  string */
    protected $parseMode;

    /** @var  boolean */
    protected $disableWebPagePreview;

    /** @var  boolean */
    protected $disableNotification;

    /** @var  integer */
    protected $replyToMessageId;

    /** @var  string */
    protected $replyMarkup;

    /**
     * @return int|string
     */
    public function getChatId ()
    {
        return $this->chatId;
    }

    /**
     * @param int|string $chatId
     *
     * @return SendMessagePayload
     */
    public function setChatId ($chatId)
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * @return string
     */
    public function getText ()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return SendMessagePayload
     */
    public function setText ($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getParseMode ()
    {
        return $this->parseMode;
    }

    /**
     * @param string $parseMode
     *
     * @return SendMessagePayload
     */
    public function setParseMode ($parseMode)
    {
        $this->parseMode = $parseMode;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDisableWebPagePreview ()
    {
        return $this->disableWebPagePreview;
    }

    /**
     * @param boolean $disableWebPagePreview
     *
     * @return SendMessagePayload
     */
    public function setDisableWebPagePreview ($disableWebPagePreview)
    {
        $this->disableWebPagePreview = $disableWebPagePreview;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDisableNotification ()
    {
        return $this->disableNotification;
    }

    /**
     * @param boolean $disableNotification
     *
     * @return SendMessagePayload
     */
    public function setDisableNotification ($disableNotification)
    {
        $this->disableNotification = $disableNotification;

        return $this;
    }

    /**
     * @return int
     */
    public function getReplyToMessageId ()
    {
        return $this->replyToMessageId;
    }

    /**
     * @param int $replyToMessageId
     *
     * @return SendMessagePayload
     */
    public function setReplyToMessageId ($replyToMessageId)
    {
        $this->replyToMessageId = $replyToMessageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplyMarkup ()
    {
        return $this->replyMarkup;
    }

    /**
     * @param string $replyMarkup
     *
     * @return SendMessagePayload
     */
    public function setReplyMarkup ($replyMarkup)
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }


    public function getMethod ()
    {
        return 'sendMessage';
    }

}