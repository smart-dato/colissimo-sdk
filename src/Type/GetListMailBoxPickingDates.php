<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetListMailBoxPickingDates implements RequestInterface
{
    private ?GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null;

    /**
     * Constructor
     */
    public function __construct(?GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest)
    {
        $this->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;
    }

    public function getGetListMailBoxPickingDatesRetourRequest(): ?GetListMailBoxPickingDatesRetourRequest
    {
        return $this->getListMailBoxPickingDatesRetourRequest;
    }

    public function withGetListMailBoxPickingDatesRetourRequest(?GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest): static
    {
        $new = clone $this;
        $new->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;

        return $new;
    }
}
