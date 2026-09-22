<?php

namespace SmartDato\ColissimoSdk\Type;

class Site
{
    private ?AddressPCH $address = null;

    private ?string $code = null;

    private ?string $name = null;

    public function getAddress(): ?AddressPCH
    {
        return $this->address;
    }

    public function withAddress(?AddressPCH $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function withCode(?string $code): static
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
