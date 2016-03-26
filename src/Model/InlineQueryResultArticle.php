<?php


namespace AgentSIB\Telegram\Model;

/**
 * Represents a link to an article or web page.
 * 
 * @package AgentSIB\Telegram\Model
 */
class InlineQueryResultArticle extends AbstractInlineQueryResult
{
    /** @var  string */
    protected $title;

    /** @var  string */
    protected $messageText;

    /** @var  string */
    protected $parseMode;

    /** @var  boolean */
    protected $disableWebPagePreview;

    /** @var  string */
    protected $url;

    /** @var  boolean */
    protected $hideUrl;

    /** @var  string */
    protected $description;

    /** @var  string */
    protected $thumbUrl;

    /** @var  integer */
    protected $thumbWidth;

    /** @var  integer */
    protected $thumbHeight;

    /**
     * @return string Title of the result
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @return string Text of the message to be sent, 1-4096 characters
     */
    public function getMessageText ()
    {
        return $this->messageText;
    }

    /**
     * @return string Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
     */
    public function getParseMode ()
    {
        return $this->parseMode;
    }

    /**
     * @return boolean Optional. Disables link previews for links in the sent message
     */
    public function isDisableWebPagePreview ()
    {
        return $this->disableWebPagePreview;
    }

    /**
     * @return string Optional. URL of the result
     */
    public function getUrl ()
    {
        return $this->url;
    }

    /**
     * @return boolean Optional. Pass True, if you don't want the URL to be shown in the message
     */
    public function isHideUrl ()
    {
        return $this->hideUrl;
    }

    /**
     * @return string Optional. Short description of the result
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * @return string Optional. Url of the thumbnail for the result
     */
    public function getThumbUrl ()
    {
        return $this->thumbUrl;
    }

    /**
     * @return int Optional. Thumbnail width
     */
    public function getThumbWidth ()
    {
        return $this->thumbWidth;
    }

    /**
     * @return int Optional. Thumbnail height
     */
    public function getThumbHeight ()
    {
        return $this->thumbHeight;
    }

    /**
     * {@inheritdoc}
     */
    public function getType ()
    {
        return self::TYPE_ARTICLE;
    }


}