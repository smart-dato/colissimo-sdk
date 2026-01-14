<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLabel implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GetLabelRequest $getLabelRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\GetLabelRequest $getLabelRequest)
    {
        $this->getLabelRequest = $getLabelRequest;
    }

    public function getGetLabelRequest(): ?\SmartDato\ColissimoSdk\Type\GetLabelRequest
    {
        return $this->getLabelRequest;
    }

    public function withGetLabelRequest(?\SmartDato\ColissimoSdk\Type\GetLabelRequest $getLabelRequest): static
    {
        $new = clone $this;
        $new->getLabelRequest = $getLabelRequest;

        return $new;
    }
}
