<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetListMailBoxPickingDatesServiceResponse implements ResultInterface
{
    private ?GetListMailBoxPickingDatesResponseType $return = null;

    public function getReturn(): ?GetListMailBoxPickingDatesResponseType
    {
        return $this->return;
    }

    public function withReturn(?GetListMailBoxPickingDatesResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
