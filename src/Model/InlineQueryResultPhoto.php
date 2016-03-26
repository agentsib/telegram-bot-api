<?php


namespace AgentSIB\Telegram\Model;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can provide message_text to send it instead of photo.
 *
 * @package AgentSIB\Telegram\Model
 */
class InlineQueryResultPhoto extends AbstractInlineQueryResult
{
    /** @var  string */
    protected $photoUrl;

    /** @var  integer */
    protected $photoWidth;

    /** @var  integer */
    protected $photoHeight;

    /** @var  string */
    protected $thumbUrl;

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $description;

    /** @var  string */
    protected $caption;

    /** @var  string */
    protected $messageText;

    /** @var  string */
    protected $parseMode;

    /**
     * @return string A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB
     */
    public function getPhotoUrl ()
    {
        return $this->photoUrl;
    }

    /**
     * @return int Optional. Width of the photo
     */
    public function getPhotoWidth ()
    {
        return $this->photoWidth;
    }

    /**
     * @return int Optional. Height of the photo
     */
    public function getPhotoHeight ()
    {
        return $this->photoHeight;
    }

    /**
     * @return string URL of the thumbnail for the photo
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
     * @return string Optional. Short description of the result
     */
    public function getDescription ()
    {
        return $this->description;
    }

    /**
     * @return string Optional. Caption of the photo to be sent, 0-200 characters
     */
    public function getCaption ()
    {
        return $this->caption;
    }

    /**
     * @return string Optional. Text of a message to be sent instead of the photo, 1-4096 characters
     */
    public function getMessageText ()
    {
        return $this->messageText;
    }

    /**
     * @return string  Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
     */
    public function getParseMode ()
    {
        return $this->parseMode;
    }

    /**
     * {@inheritdoc}
     */
    public function getType ()
    {
        return self::TYPE_PHOTO;
    }


}