<?php

namespace SmartDato\ColissimoSdk\Type;

class BordereauResponse extends BaseResponse
{
    private ?Bordereau $bordereau = null;

    public function getBordereau(): ?Bordereau
    {
        return $this->bordereau;
    }

    public function withBordereau(?Bordereau $bordereau): static
    {
        $new = clone $this;
        $new->bordereau = $bordereau;

        return $new;
    }
}
