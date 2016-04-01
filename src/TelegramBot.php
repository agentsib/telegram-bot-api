<?php

namespace AgentSIB\Telegram;

use AgentSIB\Telegram\Model\Update;
use AgentSIB\Telegram\Model\UserProfilePhotos;
use AgentSIB\Telegram\Payload\GetMePayload;
use AgentSIB\Telegram\Payload\GetUpdatesPayload;
use AgentSIB\Telegram\Payload\GetUserProfilePhotosPayload;
use AgentSIB\Telegram\Payload\PayloadInterface;
use AgentSIB\Telegram\Payload\PayloadResponseInterface;
use AgentSIB\Telegram\Payload\SendMessagePayload;
use AgentSIB\Telegram\Payload\SetWebhookPayload;
use AgentSIB\Telegram\Serializer\Handler\FileTypeHandler;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;

class TelegramBot
{
    protected $apiToken;

    protected $serverUrl = 'https://api.telegram.org';

    protected $serializer;

    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;

        $this->serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__.'/Resources/serializer', __NAMESPACE__)
            ->configureHandlers(function(HandlerRegistry $registry){
                $registry->registerSubscribingHandler(new FileTypeHandler());
            })
//            ->addDefaultHandlers()
//            ->addDefaultListeners()
            ->build();
    }

    /**
     * @param PayloadInterface $payload
     * @return PayloadResponseInterface
     * @throws \Exception
     */
    protected function call(PayloadInterface $payload)
    {
        $curl = curl_init();

        switch ($payload->getPayloadType()) {
            case PayloadInterface::TYPE_JSON:
                $postFields = $this->serializer->serialize($payload, 'json');
                $httpHeaders = array('Content-type: application/json', 'Accept: application/json');
                break;
            case PayloadInterface::TYPE_MULTIPART:
                $postFields = $this->serializer->toArray($payload);
                if (function_exists('curl_file_create')) {
                    foreach ($postFields as &$field) {
                        if (substr($field, 0, 1) == '@') {
                            $field = curl_file_create(substr($field, 1));
                        }
                    }
                }
                $httpHeaders = array(
                    'Content-Type: multipart/form-data',
                    'Accept: application/json'
                );
                break;
            default:
                throw new \Exception('Unknown payload type');
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL             => $this->serverUrl.'/bot'.$this->apiToken.'/'.$payload->getMethod(),
            CURLOPT_POST            => true,
            CURLOPT_HEADER          => false,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CONNECTTIMEOUT  => 10,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_HTTPHEADER      => $httpHeaders,
            CURLOPT_POSTFIELDS      => $postFields,
        ));
        $response   = curl_exec($curl);
        $error_code = curl_errno($curl);
        $error_msg  = curl_error($curl);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if ($error_code) {
            throw new \Exception('Transport error #' . $error_code.': ' . $error_msg);
        }
//        if ($response_code != '200') {
//            throw new \Exception('Http error code: ' . $response_code);
//        }

        return $this->serializer->deserialize($response, $payload->getPayloadClass(), 'json');
    }

    public function getMe()
    {
        $payload = new GetMePayload();

        $response = $this->call($payload);

        return $response->getResult();
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param int $timeout
     * @return ArrayCollection|Update[]
     * @throws \Exception
     */
    public function getUpdates($offset = 0, $limit = 100, $timeout = 0)
    {
        $payload = new GetUpdatesPayload();
        $payload
            ->setOffset($offset)
            ->setLimit($limit)
            ->setTimeout($timeout);

        $response = $this->call($payload);

        return $response->getResult();
    }

    /**
     * @param $userId
     * @param int $limit
     * @param int $offset
     * @return UserProfilePhotos
     * @throws \Exception
     */
    public function getUserProfilePhotos($userId, $limit = 100, $offset = 0)
    {
        $payload = new GetUserProfilePhotosPayload();
        $payload
            ->setUserId($userId)
            ->setLimit($limit)
            ->setOffset($offset);

        $response = $this->call($payload);

        return $response->getResult();
    }

    public function setWebhook($url, $certificate = null)
    {

        if ($certificate) {
            $certificate = new \SplFileInfo($certificate);
            if (!$certificate->isFile() || !$certificate->isReadable()) {
                throw new \Exception('Certificate file not exists');
            }
        }

        $payload = new SetWebhookPayload();
        $payload
            ->setUrl($url)
            ->setCertificate($certificate);
        $response = $this->call($payload);

        var_dump($response);
        return $response->getResult();
    }

    public function sendMessage($chatId, $text)
    {
        $payload = new SendMessagePayload();
        $payload
            ->setChatId($chatId)
            ->setText($text);

        return $this->serializer->serialize($payload, 'json');
    }

    /**
     * @param $updateString
     * @return Update
     */
    public function parseUpdate($updateString) {
        return $this->serializer->deserialize($updateString, 'AgentSIB\Telegram\Model\Update', 'json');
    }
}
