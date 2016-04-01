<?php


namespace AgentSIB\Telegram\Serializer\Handler;


use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\VisitorInterface;

class FileTypeHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods ()
    {
        $handlers = array();
        $types = array('file', 'SplFileInfo');

        foreach ($types as $type) {
            $handlers[] = array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => $type,
                'method' => 'serializeSplFileInfo',
            );
        }
        return $handlers;
    }

    public function serializeSplFileInfo(VisitorInterface $visitor, \SplFileInfo $file, array $type, Context $context)
    {
        if ($file->isReadable()) {
            return '@'.$file->getRealPath();
        }
        return null;
    }

}