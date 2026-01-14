<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetListMailBoxPickingDates implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest)
    {
        $this->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;
    }

    public function getGetListMailBoxPickingDatesRetourRequest(): ?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesRetourRequest
    {
        return $this->getListMailBoxPickingDatesRetourRequest;
    }

    public function withGetListMailBoxPickingDatesRetourRequest(?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest): static
    {
        $new = clone $this;
        $new->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;

        return $new;
    }
}
