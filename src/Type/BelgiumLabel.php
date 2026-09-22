<?php

namespace SmartDato\ColissimoSdk\Type;

class BelgiumLabel
{
    private ?string $codeBarre = null;

    private ?CodeVAS $codeVAS = null;

    private ?string $identification = null;

    private ?ReturnAddressBelgium $returnAddress = null;

    public function getCodeBarre(): ?string
    {
        return $this->codeBarre;
    }

    public function withCodeBarre(?string $codeBarre): static
    {
        $new = clone $this;
        $new->codeBarre = $codeBarre;

        return $new;
    }

    public function getCodeVAS(): ?CodeVAS
    {
        return $this->codeVAS;
    }

    public function withCodeVAS(?CodeVAS $codeVAS): static
    {
        $new = clone $this;
        $new->codeVAS = $codeVAS;

        return $new;
    }

    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    public function withIdentification(?string $identification): static
    {
        $new = clone $this;
        $new->identification = $identification;

        return $new;
    }

    public function getReturnAddress(): ?ReturnAddressBelgium
    {
        return $this->returnAddress;
    }

    public function withReturnAddress(?ReturnAddressBelgium $returnAddress): static
    {
        $new = clone $this;
        $new->returnAddress = $returnAddress;

        return $new;
    }
}
