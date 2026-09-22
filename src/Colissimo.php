<?php

namespace SmartDato\ColissimoSdk;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SmartDato\ColissimoSdk\Type\GenerateLabel;
use SmartDato\ColissimoSdk\Type\GenerateLabelResponse;
use SmartDato\ColissimoSdk\Type\Track;
use SmartDato\ColissimoSdk\Type\TrackResponse;

/**
 * Proxy wraper on WSDL clients
 */
class Colissimo
{
    private ?ColissimoShipmentClient $collisimoShipmentClient = null;

    private ?ColissimoTrackingClient $collisimoTrackingClient = null;

    /**
     * @param  RequestInterface & GenerateLabel  $parameters
     * @return ResultInterface & GenerateLabelResponse
     *
     * @throws SoapException
     */
    public function generateLabel(GenerateLabel $parameters): GenerateLabelResponse
    {
        if ($this->collisimoShipmentClient === null) {
            $this->collisimoShipmentClient = app()->make(ColissimoShipmentClient::class);
        }

        return $this->collisimoShipmentClient->generateLabel($parameters);
    }

    /**
     * @param  RequestInterface & Track  $parameters
     * @return ResultInterface & TrackResponse
     *
     * @throws SoapException
     */
    public function getTrack(Track $parameters): TrackResponse
    {
        if ($this->collisimoTrackingClient === null) {
            $this->collisimoTrackingClient = app()->make(ColissimoTrackingClient::class);
        }

        return $this->collisimoTrackingClient->track($parameters);
    }
}
