<?php


namespace AgentSIB\Telegram\Model;

/**
 * Inline query result
 *
 * @package AgentSIB\Telegram\Model
 */
abstract class AbstractInlineQueryResult extends AbstractModel
{
    const TYPE_ARTICLE = 'article';
    const TYPE_PHOTO = 'photo';
    const TYPE_GIF = 'gif';
    const TYPE_MPEG4_GIF = 'mpeg4_gif';
    const TYPE_VIDEO = 'video';

    /** @var  string */
    protected $id;

    /** @var  boolean */
    protected $disableWebPagePreview;

    /**
     * @return string Unique identifier for this result, 1-64 bytes
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @return boolean  Optional. Disables link previews for links in the sent message
     */
    public function isDisableWebPagePreview ()
    {
        return $this->disableWebPagePreview;
    }

    /**
     * @return string Type of InlineQueryResult
     */
    abstract public function getType();
}