<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductInterService implements RequestInterface
{
    private ?string $arg0 = null;

    private ?GetProductInterRequest $arg1 = null;

    /**
     * Constructor
     */
    public function __construct(?string $arg0, ?GetProductInterRequest $arg1)
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

    public function getArg1(): ?GetProductInterRequest
    {
        return $this->arg1;
    }

    public function withArg1(?GetProductInterRequest $arg1): static
    {
        $new = clone $this;
        $new->arg1 = $arg1;

        return $new;
    }
}
