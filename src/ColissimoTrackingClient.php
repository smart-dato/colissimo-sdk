<?php

namespace SmartDato\ColissimoSdk;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SmartDato\ColissimoSdk\Type\Track;
use SmartDato\ColissimoSdk\Type\TrackResponse;

class ColissimoTrackingClient
{
    private Caller $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & Track  $parameters
     * @return ResultInterface & TrackResponse
     *
     * @throws SoapException
     */
    public function track(Track $parameters): TrackResponse
    {
        $response = ($this->caller)('track', $parameters);

        \Psl\Type\instance_of(TrackResponse::class)->assert($response);
        \Psl\Type\instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
