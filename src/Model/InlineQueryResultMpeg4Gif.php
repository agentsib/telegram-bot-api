<?php


namespace AgentSIB\Telegram\Model;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this
 * animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can provide
 * message_text to send it instead of the animation.
 *
 * @package AgentSIB\Telegram\Model
 */
class InlineQueryResultMpeg4Gif extends AbstractInlineQueryResult
{
    /** @var  string */
    protected $mpeg4Url;

    /** @var  string */
    protected $mpeg4Width;

    /** @var  integer */
    protected $mpeg4Height;

    /** @var  integer */
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
     * @return string A valid URL for the MP4 file. File size must not exceed 1MB
     */
    public function getMpeg4Url ()
    {
        return $this->mpeg4Url;
    }

    /**
     * @return string Optional. Video width
     */
    public function getMpeg4Width ()
    {
        return $this->mpeg4Width;
    }

    /**
     * @return int Optional. Video height
     */
    public function getMpeg4Height ()
    {
        return $this->mpeg4Height;
    }

    /**
     * @return int URL of the static thumbnail (jpeg or gif) for the result
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
     * @return string Optional. Caption of the MPEG-4 file to be sent, 0-200 characters
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
        return self::TYPE_MPEG4_GIF;
    }


}