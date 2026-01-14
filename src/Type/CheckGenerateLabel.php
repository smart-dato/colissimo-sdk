<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckGenerateLabel implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelCheckGenerateLabelRequest $checkGenerateLabelRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelCheckGenerateLabelRequest $checkGenerateLabelRequest)
    {
        $this->checkGenerateLabelRequest = $checkGenerateLabelRequest;
    }

    public function getCheckGenerateLabelRequest(): ?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelCheckGenerateLabelRequest
    {
        return $this->checkGenerateLabelRequest;
    }

    public function withCheckGenerateLabelRequest(?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelCheckGenerateLabelRequest $checkGenerateLabelRequest): static
    {
        $new = clone $this;
        $new->checkGenerateLabelRequest = $checkGenerateLabelRequest;

        return $new;
    }
}
