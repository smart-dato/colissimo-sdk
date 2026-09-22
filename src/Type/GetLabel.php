<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLabel implements RequestInterface
{
    private ?GetLabelRequest $getLabelRequest = null;

    /**
     * Constructor
     */
    public function __construct(?GetLabelRequest $getLabelRequest)
    {
        $this->getLabelRequest = $getLabelRequest;
    }

    public function getGetLabelRequest(): ?GetLabelRequest
    {
        return $this->getLabelRequest;
    }

    public function withGetLabelRequest(?GetLabelRequest $getLabelRequest): static
    {
        $new = clone $this;
        $new->getLabelRequest = $getLabelRequest;

        return $new;
    }
}
