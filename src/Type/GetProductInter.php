<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductInter implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GetProductInterRequest $getProductInterRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\GetProductInterRequest $getProductInterRequest)
    {
        $this->getProductInterRequest = $getProductInterRequest;
    }

    public function getGetProductInterRequest(): ?\SmartDato\ColissimoSdk\Type\GetProductInterRequest
    {
        return $this->getProductInterRequest;
    }

    public function withGetProductInterRequest(?\SmartDato\ColissimoSdk\Type\GetProductInterRequest $getProductInterRequest): static
    {
        $new = clone $this;
        $new->getProductInterRequest = $getProductInterRequest;

        return $new;
    }
}
