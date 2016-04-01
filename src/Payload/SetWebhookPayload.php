<?php


namespace AgentSIB\Telegram\Payload;


class SetWebhookPayload extends AbstractPayload
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var \SplFileInfo
     */
    protected $certificate;

    public function getMethod ()
    {
        return 'setWebhook';
    }

    /**
     * @return string
     */
    public function getUrl ()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return SetWebhookPayload
     */
    public function setUrl ($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return \SplFileInfo
     */
    public function getCertificate ()
    {
        return $this->certificate;
    }

    /**
     * @param \SplFileInfo $certificate
     *
     * @return SetWebhookPayload
     */
    public function setCertificate ($certificate)
    {
        $this->certificate = $certificate;

        return $this;
    }

    public function getPayloadType ()
    {
        return self::TYPE_MULTIPART;
    }


}