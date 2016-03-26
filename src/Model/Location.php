<?php


namespace AgentSIB\Telegram\Model;

/**
 * This object represents a point on the map.
 *
 * @package AgentSIB\Telegram\Model
 */
class Location extends AbstractModel
{
    /** @var  float */
    protected $longitude;

    /** @var  float */
    protected $latitude;

    /**
     * @return float Longitude as defined by sender
     */
    public function getLongitude ()
    {
        return $this->longitude;
    }

    /**
     * @return float Latitude as defined by sender
     */
    public function getLatitude ()
    {
        return $this->latitude;
    }

}
