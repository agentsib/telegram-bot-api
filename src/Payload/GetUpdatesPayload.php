<?php


namespace AgentSIB\Telegram\Payload;


class GetUpdatesPayload extends AbstractPayload
{
    /** @var  int */
    protected $offset = 0;

    protected $limit = 100;

    protected $timeout = 0;

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
     * @return GetUpdatesPayload
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
     * @return GetUpdatesPayload
     */
    public function setLimit ($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimeout ()
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     *
     * @return GetUpdatesPayload
     */
    public function setTimeout ($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function getMethod ()
    {
        return 'getUpdates';
    }

}