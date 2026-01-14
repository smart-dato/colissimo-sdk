<?php

namespace SmartDato\ColissimoSdk\Type;

class ReturnAddressBelgium
{
    private ?string $line1 = null;

    private ?string $line2 = null;

    private ?string $mention = null;

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

    public function getMention(): ?string
    {
        return $this->mention;
    }

    public function withMention(?string $mention): static
    {
        $new = clone $this;
        $new->mention = $mention;

        return $new;
    }
}
