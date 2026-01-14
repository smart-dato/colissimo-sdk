<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateToken implements RequestInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GenerateTokenGenerateTokenRequest $generateTokenRequest = null;

    /**
     * Constructor
     */
    public function __construct(?\SmartDato\ColissimoSdk\Type\GenerateTokenGenerateTokenRequest $generateTokenRequest)
    {
        $this->generateTokenRequest = $generateTokenRequest;
    }

    public function getGenerateTokenRequest(): ?\SmartDato\ColissimoSdk\Type\GenerateTokenGenerateTokenRequest
    {
        return $this->generateTokenRequest;
    }

    public function withGenerateTokenRequest(?\SmartDato\ColissimoSdk\Type\GenerateTokenGenerateTokenRequest $generateTokenRequest): static
    {
        $new = clone $this;
        $new->generateTokenRequest = $generateTokenRequest;

        return $new;
    }
}
