<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProductInterResponse implements ResultInterface
{
    private ?GetProductInterResponseType $return = null;

    public function getReturn(): ?GetProductInterResponseType
    {
        return $this->return;
    }

    public function withReturn(?GetProductInterResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
