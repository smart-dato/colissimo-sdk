<?php

namespace SmartDato\ColissimoSdk\Type;

class AddressPCH
{
    private ?string $city = null;

    private ?string $line0 = null;

    private ?string $line1 = null;

    private ?string $line2 = null;

    private ?string $zipCode = null;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function withCity(?string $city): static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    public function getLine0(): ?string
    {
        return $this->line0;
    }

    public function withLine0(?string $line0): static
    {
        $new = clone $this;
        $new->line0 = $line0;

        return $new;
    }

    public function getLine1(): ?string
    {
        return $this->line1;
    }

    public function withLine1(?string $line1): static
    {
        $new = clone $this;
        $new->line1 = $line1;

        return $new;
    }

    public function getLine2(): ?string
    {
        return $this->line2;
    }

    public function withLine2(?string $line2): static
    {
        $new = clone $this;
        $new->line2 = $line2;

        return $new;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function withZipCode(?string $zipCode): static
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }
}
