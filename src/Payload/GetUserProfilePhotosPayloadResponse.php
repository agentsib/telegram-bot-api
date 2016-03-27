<?php


namespace AgentSIB\Telegram\Payload;


use AgentSIB\Telegram\Model\UserProfilePhotos;

class GetUserProfilePhotosPayloadResponse extends AbstractPayloadResponse
{

    /** @var  UserProfilePhotos */
    protected $result;

    /**
     * @return UserProfilePhotos
     */
    public function getResult ()
    {
        return $this->result;
    }

}