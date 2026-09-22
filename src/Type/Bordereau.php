<?php

namespace SmartDato\ColissimoSdk\Type;

class Bordereau
{
    /**
     * @var null | mixed
     */
    private mixed $bordereauDataHandler = null;

    private ?BordereauHeader $bordereauHeader = null;

    /**
     * @return null | mixed
     */
    public function getBordereauDataHandler(): mixed
    {
        return $this->bordereauDataHandler;
    }

    /**
     * @param  null | mixed  $bordereauDataHandler
     */
    public function withBordereauDataHandler(mixed $bordereauDataHandler): static
    {
        $new = clone $this;
        $new->bordereauDataHandler = $bordereauDataHandler;

        return $new;
    }

    public function getBordereauHeader(): ?BordereauHeader
    {
        return $this->bordereauHeader;
    }

    public function withBordereauHeader(?BordereauHeader $bordereauHeader): static
    {
        $new = clone $this;
        $new->bordereauHeader = $bordereauHeader;

        return $new;
    }
}
