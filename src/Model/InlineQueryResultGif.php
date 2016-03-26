<?php


namespace AgentSIB\Telegram\Model;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with
 * optional caption. Alternatively, you can provide message_text to send it instead of the animation.
 *
 * @package AgentSIB\Telegram\Model
 */
class InlineQueryResultGif extends AbstractInlineQueryResult
{
    /** @var  string */
    protected $gifUrl;

    /** @var  integer */
    protected $gifWidth;

    /** @var  integer */
    protected $gifHeight;

    /** @var  string */
    protected $thumbUrl;

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $caption;

    /** @var  string */
    protected $messageText;

    /** @var  string */
    protected $parseMode;

    /** @var  boolean */
    protected $disableWebPagePreview;

    /**
     * @return string A valid URL for the GIF file. File size must not exceed 1MB
     */
    public function getGifUrl ()
    {
        return $this->gifUrl;
    }

    /**
     * @return int Optional. Width of the GIF
     */
    public function getGifWidth ()
    {
        return $this->gifWidth;
    }

    /**
     * @return int Optional. Height of the GIF
     */
    public function getGifHeight ()
    {
        return $this->gifHeight;
    }

    /**
     * @return string URL of the static thumbnail for the result (jpeg or gif)
     */
    public function getThumbUrl ()
    {
        return $this->thumbUrl;
    }

    /**
     * @return string Optional. Title for the result
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @return string Optional. Caption of the GIF file to be sent, 0-200 characters
     */
    public function getCaption ()
    {
        return $this->caption;
    }

    /**
     * @return string Optional. Text of a message to be sent instead of the animation, 1-4096 characters
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
     * {@inheritdoc}
     */
    public function getType ()
    {
        return self::TYPE_GIF;
    }


}