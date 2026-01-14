<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProductInterResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GetProductInterResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\GetProductInterResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\GetProductInterResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
