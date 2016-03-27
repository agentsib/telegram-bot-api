<?php


namespace AgentSIB\Telegram\Model;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This object represents a message.
 *
 * @package AgentSIB\Telegram\Model
 */
class Message extends AbstractModel
{
    /** @var  integer */
    protected $messageId;

    /** @var  User */
    protected $from;

    /** @var  integer */
    protected $date;

    /** @var  Chat */
    protected $chat;

    /** @var  User */
    protected $forwardFrom;

    /** @var  integer */
    protected $forwardDate;

    /** @var  Message */
    protected $replyToMessage;

    /** @var  string */
    protected $text;

    /** @var  Audio */
    protected $audio;

    /** @var  Document */
    protected $document;

    /** @var  ArrayCollection|PhotoSize[] */
    protected $photo;

    /** @var  Sticker */
    protected $sticker;

    /** @var  Video */
    protected $video;

    /** @var  Voice */
    protected $voice;

    /** @var  string */
    protected $caption;

    /** @var  Contact */
    protected $contact;

    /** @var  Location */
    protected $location;

    /** @var  User */
    protected $newChatParticipant;

    /** @var  User */
    protected $leftChatParticipant;

    /** @var  string */
    protected $newChatTitle;

    /** @var  ArrayCollection|PhotoSize[] */
    protected $newChatPhoto;

    /** @var  boolean */
    protected $deleteChatPhoto = false;

    /** @var  boolean */
    protected $groupChatCreated = false;

    /** @var  boolean */
    protected $supergroupChatCreated = false;

    /** @var  boolean */
    protected $channelChatCreated = false;

    /** @var  integer */
    protected $migrateToChatId;

    /** @var  integer */
    protected $migrateFromChatId;

    /**
     * @return int Unique message identifier
     */
    public function getMessageId ()
    {
        return $this->messageId;
    }

    /**
     * @return User Optional. Sender, can be empty for messages sent to channels
     */
    public function getFrom ()
    {
        return $this->from;
    }

    /**
     * @return int Date the message was sent in Unix time
     */
    public function getDate ()
    {
        return $this->date;
    }

    /**
     * @return Chat Conversation the message belongs to
     */
    public function getChat ()
    {
        return $this->chat;
    }

    /**
     * @return User Optional. For forwarded messages, sender of the original message
     */
    public function getForwardFrom ()
    {
        return $this->forwardFrom;
    }

    /**
     * @return int Optional. For forwarded messages, date the original message was sent in Unix time
     */
    public function getForwardDate ()
    {
        return $this->forwardDate;
    }

    /**
     * @return Message Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    public function getReplyToMessage ()
    {
        return $this->replyToMessage;
    }

    /**
     * @return string Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    public function getText ()
    {
        return $this->text;
    }

    /**
     * @return Audio Optional. Message is an audio file, information about the file
     */
    public function getAudio ()
    {
        return $this->audio;
    }

    /**
     * @return Document Optional. Message is a general file, information about the file
     */
    public function getDocument ()
    {
        return $this->document;
    }

    /**
     * @return ArrayCollection|PhotoSize[]> Optional. Message is a photo, available sizes of the photo
     */
    public function getPhoto ()
    {
        return $this->photo;
    }

    /**
     * @return Sticker Optional. Message is a sticker, information about the sticker
     */
    public function getSticker ()
    {
        return $this->sticker;
    }

    /**
     * @return Video Optional. Message is a video, information about the video
     */
    public function getVideo ()
    {
        return $this->video;
    }

    /**
     * @return Voice Optional. Message is a voice message, information about the file
     */
    public function getVoice ()
    {
        return $this->voice;
    }

    /**
     * @return string Optional. Caption for the photo or video, 0-200 characters
     */
    public function getCaption ()
    {
        return $this->caption;
    }

    /**
     * @return Contact Optional. Message is a shared contact, information about the contact
     */
    public function getContact ()
    {
        return $this->contact;
    }

    /**
     * @return Location Optional. Message is a shared location, information about the location
     */
    public function getLocation ()
    {
        return $this->location;
    }

    /**
     * @return User Optional. A new member was added to the group, information about them (this member may be the bot itself)
     */
    public function getNewChatParticipant ()
    {
        return $this->newChatParticipant;
    }

    /**
     * @return User Optional. A member was removed from the group, information about them (this member may be the bot itself)
     */
    public function getLeftChatParticipant ()
    {
        return $this->leftChatParticipant;
    }

    /**
     * @return string Optional. A chat title was changed to this value
     */
    public function getNewChatTitle ()
    {
        return $this->newChatTitle;
    }

    /**
     * @return ArrayCollection|PhotoSize[] Optional. A chat photo was change to this value
     */
    public function getNewChatPhoto ()
    {
        return $this->newChatPhoto;
    }

    /**
     * @return boolean Optional. Service message: the chat photo was deleted
     */
    public function isDeleteChatPhoto ()
    {
        return $this->deleteChatPhoto;
    }

    /**
     * @return boolean Optional. Service message: the group has been created
     */
    public function isGroupChatCreated ()
    {
        return $this->groupChatCreated;
    }

    /**
     * @return boolean Optional. Service message: the supergroup has been created
     */
    public function isSupergroupChatCreated ()
    {
        return $this->supergroupChatCreated;
    }

    /**
     * @return boolean Optional. Service message: the channel has been created
     */
    public function isChannelChatCreated ()
    {
        return $this->channelChatCreated;
    }

    /**
     * @return int Optional. The group has been migrated to a supergroup with the specified identifier, not exceeding 1e13 by absolute value
     */
    public function getMigrateToChatId ()
    {
        return $this->migrateToChatId;
    }

    /**
     * @return int Optional. The supergroup has been migrated from a group with the specified identifier, not exceeding 1e13 by absolute value
     */
    public function getMigrateFromChatId ()
    {
        return $this->migrateFromChatId;
    }
}