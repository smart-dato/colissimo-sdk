<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateLabel implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GenerateLabelGenerateLabelRequest $generateLabelRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\GenerateLabelGenerateLabelRequest $generateLabelRequest)
    {
        $this->generateLabelRequest = $generateLabelRequest;
    }

    public function getGenerateLabelRequest(): ?\SmartDato\ColissimoSdk\Type\GenerateLabelGenerateLabelRequest
    {
        return $this->generateLabelRequest;
    }

    public function withGenerateLabelRequest(?\SmartDato\ColissimoSdk\Type\GenerateLabelGenerateLabelRequest $generateLabelRequest): static
    {
        $new = clone $this;
        $new->generateLabelRequest = $generateLabelRequest;

        return $new;
    }
}
