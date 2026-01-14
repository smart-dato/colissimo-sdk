<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetListMailBoxPickingDatesServiceResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\GetListMailBoxPickingDatesResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
