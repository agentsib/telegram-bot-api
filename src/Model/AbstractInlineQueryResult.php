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

    /**
     * @return string Unique identifier for this result, 1-64 bytes
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @return string Type of InlineQueryResult
     */
    abstract public function getType();
}