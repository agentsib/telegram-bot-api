<?php


namespace AgentSIB\Telegram\Model;

/**
 * Represents link to a page containing an embedded video player or a video file.
 *
 * @package AgentSIB\Telegram\Model
 */
class InlineQueryResultVideo extends AbstractInlineQueryResult
{
    /** @var  string */
    protected $videoUrl;

    /** @var  integer */
    protected $videoWidth;

    /** @var  integer */
    protected $videoHeight;

    /** @var  integer */
    protected $videoDuration;

    /** @var  string */
    protected $thumbUrl;

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $description;

    /** @var  string */
    protected $mimeType;

    /** @var  string */
    protected $messageText;

    /** @var  string */
    protected $parseMode;

    /** @var  boolean */
    protected $disableWebPagePreview;

    /**
     * @return string A valid URL for the embedded video player or video file
     */
    public function getVideoUrl ()
    {
        return $this->videoUrl;
    }

    /**
     * @return int Optional. Video width
     */
    public function getVideoWidth ()
    {
        return $this->videoWidth;
    }

    /**
     * @return int Optional. Video height
     */
    public function getVideoHeight ()
    {
        return $this->videoHeight;
    }

    /**
     * @return int Optional. Video duration in seconds
     */
    public function getVideoDuration ()
    {
        return $this->videoDuration;
    }

    /**
     * @return string URL of the thumbnail (jpeg only) for the video
     */
    public function getThumbUrl ()
    {
        return $this->thumbUrl;
    }

    /**
     * @return string Title for the result
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @return string Optional. Short description of the result
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * @return string Mime type of the content of video url, “text/html” or “video/mp4”
     */
    public function getMimeType ()
    {
        return $this->mimeType;
    }

    /**
     * @return string Text of the message to be sent with the video, 1-4096 characters
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
     * @return boolean  Optional. Disables link previews for links in the sent message
     */
    public function isDisableWebPagePreview ()
    {
        return $this->disableWebPagePreview;
    }

    public function getType ()
    {
        return self::TYPE_VIDEO;
    }


}