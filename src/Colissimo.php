<?php

namespace SmartDato\ColissimoSdk;

/**
 * Proxy wraper on WSDL clients
 */
class Colissimo
{
    private ?ColissimoShipmentClient $collisimoShipmentClient = null;

    private ?ColissimoTrackingClient $collisimoTrackingClient = null;

    /**
     * @param  RequestInterface & Type\GenerateLabel  $parameters
     * @return ResultInterface & Type\GenerateLabelResponse
     *
     * @throws SoapException
     */
    public function generateLabel(\SmartDato\ColissimoSdk\Type\GenerateLabel $parameters): \SmartDato\ColissimoSdk\Type\GenerateLabelResponse
    {
        if ($this->collisimoShipmentClient === null) {
            $this->collisimoShipmentClient = app()->make(ColissimoShipmentClient::class);
        }

        return $this->collisimoShipmentClient->generateLabel($parameters);
    }

    /**
     * @param  RequestInterface & Type\Track  $parameters
     * @return ResultInterface & Type\TrackResponse
     *
     * @throws SoapException
     */
    public function getTrack(\SmartDato\ColissimoSdk\Type\Track $parameters): \SmartDato\ColissimoSdk\Type\TrackResponse
    {
        if ($this->collisimoTrackingClient === null) {
            $this->collisimoTrackingClient = app()->make(ColissimoTrackingClient::class);
        }

        return $this->collisimoTrackingClient->track($parameters);
    }
}
