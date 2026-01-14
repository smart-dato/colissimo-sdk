<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PlanPickupResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\PlanPickupResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\PlanPickupResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\PlanPickupResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
