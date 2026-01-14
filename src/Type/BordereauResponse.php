<?php

namespace SmartDato\ColissimoSdk\Type;

class BordereauResponse extends BaseResponse
{
    private ?\SmartDato\ColissimoSdk\Type\Bordereau $bordereau = null;

    public function getBordereau(): ?\SmartDato\ColissimoSdk\Type\Bordereau
    {
        return $this->bordereau;
    }

    public function withBordereau(?\SmartDato\ColissimoSdk\Type\Bordereau $bordereau): static
    {
        $new = clone $this;
        $new->bordereau = $bordereau;

        return $new;
    }
}
