<?php


namespace AgentSIB\Telegram\Payload;


class GetUserProfilePhotosPayload extends AbstractPayload
{
    /** @var  int */
    protected $userId;

    /** @var  int */
    protected $offset;

    /** @var  int */
    protected $limit;

    /**
     * @return int
     */
    public function getUserId ()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return GetUserProfilePhotosPayload
     */
    public function setUserId ($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset ()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return GetUserProfilePhotosPayload
     */
    public function setOffset ($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit ()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return GetUserProfilePhotosPayload
     */
    public function setLimit ($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    public function getMethod ()
    {
        return 'getUserProfilePhotos';
    }

}