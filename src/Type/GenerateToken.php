<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateToken implements RequestInterface
{
    private ?GenerateTokenGenerateTokenRequest $generateTokenRequest = null;

    /**
     * Constructor
     */
    public function __construct(?GenerateTokenGenerateTokenRequest $generateTokenRequest)
    {
        $this->generateTokenRequest = $generateTokenRequest;
    }

    public function getGenerateTokenRequest(): ?GenerateTokenGenerateTokenRequest
    {
        return $this->generateTokenRequest;
    }

    public function withGenerateTokenRequest(?GenerateTokenGenerateTokenRequest $generateTokenRequest): static
    {
        $new = clone $this;
        $new->generateTokenRequest = $generateTokenRequest;

        return $new;
    }
}
