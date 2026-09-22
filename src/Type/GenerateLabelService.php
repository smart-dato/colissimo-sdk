<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateLabelService implements RequestInterface
{
    private ?string $arg0 = null;

    private ?GenerateLabelServiceArg1 $arg1 = null;

    /**
     * Constructor
     */
    public function __construct(?string $arg0, ?GenerateLabelServiceArg1 $arg1)
    {
        $this->arg0 = $arg0;
        $this->arg1 = $arg1;
    }

    public function getArg0(): ?string
    {
        return $this->arg0;
    }

    public function withArg0(?string $arg0): static
    {
        $new = clone $this;
        $new->arg0 = $arg0;

        return $new;
    }

    public function getArg1(): ?GenerateLabelServiceArg1
    {
        return $this->arg1;
    }

    public function withArg1(?GenerateLabelServiceArg1 $arg1): static
    {
        $new = clone $this;
        $new->arg1 = $arg1;

        return $new;
    }
}
