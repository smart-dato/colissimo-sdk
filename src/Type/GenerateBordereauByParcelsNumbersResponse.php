<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateBordereauByParcelsNumbersResponse implements ResultInterface
{
    private ?BordereauResponse $return = null;

    public function getReturn(): ?BordereauResponse
    {
        return $this->return;
    }

    public function withReturn(?BordereauResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
