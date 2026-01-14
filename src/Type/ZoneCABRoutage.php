<?php

namespace SmartDato\ColissimoSdk\Type;

class ZoneCABRoutage
{
    private ?string $barCodeRouting = null;

    private ?string $parcelNumberRouting = null;

    public function getBarCodeRouting(): ?string
    {
        return $this->barCodeRouting;
    }

    public function withBarCodeRouting(?string $barCodeRouting): static
    {
        $new = clone $this;
        $new->barCodeRouting = $barCodeRouting;

        return $new;
    }

    public function getParcelNumberRouting(): ?string
    {
        return $this->parcelNumberRouting;
    }

    public function withParcelNumberRouting(?string $parcelNumberRouting): static
    {
        $new = clone $this;
        $new->parcelNumberRouting = $parcelNumberRouting;

        return $new;
    }
}
