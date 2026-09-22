<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLabelResponse implements ResultInterface
{
    private ?GetLabelResponseType $return = null;

    public function getReturn(): ?GetLabelResponseType
    {
        return $this->return;
    }

    public function withReturn(?GetLabelResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
