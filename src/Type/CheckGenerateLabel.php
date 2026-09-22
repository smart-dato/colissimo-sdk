<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckGenerateLabel implements RequestInterface
{
    private ?CheckGenerateLabelCheckGenerateLabelRequest $checkGenerateLabelRequest = null;

    /**
     * Constructor
     */
    public function __construct(?CheckGenerateLabelCheckGenerateLabelRequest $checkGenerateLabelRequest)
    {
        $this->checkGenerateLabelRequest = $checkGenerateLabelRequest;
    }

    public function getCheckGenerateLabelRequest(): ?CheckGenerateLabelCheckGenerateLabelRequest
    {
        return $this->checkGenerateLabelRequest;
    }

    public function withCheckGenerateLabelRequest(?CheckGenerateLabelCheckGenerateLabelRequest $checkGenerateLabelRequest): static
    {
        $new = clone $this;
        $new->checkGenerateLabelRequest = $checkGenerateLabelRequest;

        return $new;
    }
}
