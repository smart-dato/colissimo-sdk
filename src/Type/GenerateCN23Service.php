<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateCN23Service implements RequestInterface
{
    private ?string $arg0 = null;

    private ?\SmartDato\ColissimoSdk\Type\GenerateCN23ServiceArg1 $arg1 = null;

    /**
     * Constructor
     */
    public function __construct(?string $arg0, ?\SmartDato\ColissimoSdk\Type\GenerateCN23ServiceArg1 $arg1)
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

    public function getArg1(): ?\SmartDato\ColissimoSdk\Type\GenerateCN23ServiceArg1
    {
        return $this->arg1;
    }

    public function withArg1(?\SmartDato\ColissimoSdk\Type\GenerateCN23ServiceArg1 $arg1): static
    {
        $new = clone $this;
        $new->arg1 = $arg1;

        return $new;
    }
}
