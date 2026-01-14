<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBordereauByNumberResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\BordereauResponse $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\BordereauResponse
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\BordereauResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
