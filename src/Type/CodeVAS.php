<?php

namespace SmartDato\ColissimoSdk\Type;

class CodeVAS
{
    private ?string $deliveryMode = null;

    private ?string $mention = null;

    private ?string $reserve = null;

    private ?string $signature = null;

    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode;
    }

    public function withDeliveryMode(?string $deliveryMode): static
    {
        $new = clone $this;
        $new->deliveryMode = $deliveryMode;

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

    public function getReserve(): ?string
    {
        return $this->reserve;
    }

    public function withReserve(?string $reserve): static
    {
        $new = clone $this;
        $new->reserve = $reserve;

        return $new;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function withSignature(?string $signature): static
    {
        $new = clone $this;
        $new->signature = $signature;

        return $new;
    }
}
