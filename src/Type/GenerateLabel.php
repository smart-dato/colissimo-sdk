<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateLabel implements RequestInterface
{
    private ?GenerateLabelGenerateLabelRequest $generateLabelRequest = null;

    /**
     * Constructor
     */
    public function __construct(?GenerateLabelGenerateLabelRequest $generateLabelRequest)
    {
        $this->generateLabelRequest = $generateLabelRequest;
    }

    public function getGenerateLabelRequest(): ?GenerateLabelGenerateLabelRequest
    {
        return $this->generateLabelRequest;
    }

    public function withGenerateLabelRequest(?GenerateLabelGenerateLabelRequest $generateLabelRequest): static
    {
        $new = clone $this;
        $new->generateLabelRequest = $generateLabelRequest;

        return $new;
    }
}
