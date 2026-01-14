<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLabelResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GetLabelResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\GetLabelResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\GetLabelResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
