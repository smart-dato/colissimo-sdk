<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PlanPickupResponse implements ResultInterface
{
    private ?PlanPickupResponseType $return = null;

    public function getReturn(): ?PlanPickupResponseType
    {
        return $this->return;
    }

    public function withReturn(?PlanPickupResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
