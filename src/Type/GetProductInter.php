<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductInter implements RequestInterface
{
    private ?GetProductInterRequest $getProductInterRequest = null;

    /**
     * Constructor
     */
    public function __construct(?GetProductInterRequest $getProductInterRequest)
    {
        $this->getProductInterRequest = $getProductInterRequest;
    }

    public function getGetProductInterRequest(): ?GetProductInterRequest
    {
        return $this->getProductInterRequest;
    }

    public function withGetProductInterRequest(?GetProductInterRequest $getProductInterRequest): static
    {
        $new = clone $this;
        $new->getProductInterRequest = $getProductInterRequest;

        return $new;
    }
}
