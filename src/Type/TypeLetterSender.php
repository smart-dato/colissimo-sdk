<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterSender
{
    private ?string $senderParcelRef = null;

    private ?\SmartDato\ColissimoSdk\Type\TypeAdresse $address = null;

    public function getSenderParcelRef(): ?string
    {
        return $this->senderParcelRef;
    }

    public function withSenderParcelRef(?string $senderParcelRef): static
    {
        $new = clone $this;
        $new->senderParcelRef = $senderParcelRef;

        return $new;
    }

    public function getAddress(): ?\SmartDato\ColissimoSdk\Type\TypeAdresse
    {
        return $this->address;
    }

    public function withAddress(?\SmartDato\ColissimoSdk\Type\TypeAdresse $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}
