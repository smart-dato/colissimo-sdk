<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateBordereauByParcelsNumbersService implements RequestInterface
{
    private ?string $arg0 = null;

    private ?string $arg1 = null;

    private ?string $arg2 = null;

    private ?\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceArg3 $arg3 = null;

    private ?\SmartDato\ColissimoSdk\Type\TypeFields $arg4 = null;

    /**
     * Constructor
     */
    public function __construct(?string $arg0, ?string $arg1, ?string $arg2, ?\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceArg3 $arg3, ?\SmartDato\ColissimoSdk\Type\TypeFields $arg4)
    {
        $this->arg0 = $arg0;
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
        $this->arg3 = $arg3;
        $this->arg4 = $arg4;
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

    public function getArg1(): ?string
    {
        return $this->arg1;
    }

    public function withArg1(?string $arg1): static
    {
        $new = clone $this;
        $new->arg1 = $arg1;

        return $new;
    }

    public function getArg2(): ?string
    {
        return $this->arg2;
    }

    public function withArg2(?string $arg2): static
    {
        $new = clone $this;
        $new->arg2 = $arg2;

        return $new;
    }

    public function getArg3(): ?\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceArg3
    {
        return $this->arg3;
    }

    public function withArg3(?\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersServiceArg3 $arg3): static
    {
        $new = clone $this;
        $new->arg3 = $arg3;

        return $new;
    }

    public function getArg4(): ?\SmartDato\ColissimoSdk\Type\TypeFields
    {
        return $this->arg4;
    }

    public function withArg4(?\SmartDato\ColissimoSdk\Type\TypeFields $arg4): static
    {
        $new = clone $this;
        $new->arg4 = $arg4;

        return $new;
    }
}
