<?php

namespace SmartDato\ColissimoSdk;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ColissimoTrackingClient
{
    private \Phpro\SoapClient\Caller\Caller $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & Type\Track  $parameters
     * @return ResultInterface & Type\TrackResponse
     *
     * @throws SoapException
     */
    public function track(\SmartDato\ColissimoSdk\Type\Track $parameters): \SmartDato\ColissimoSdk\Type\TrackResponse
    {
        $response = ($this->caller)('track', $parameters);

        \Psl\Type\instance_of(\SmartDato\ColissimoSdk\Type\TrackResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}
