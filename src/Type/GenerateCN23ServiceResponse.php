<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateCN23ServiceResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GenerateCN23V2ResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\GenerateCN23V2ResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\GenerateCN23V2ResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
