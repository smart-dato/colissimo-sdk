<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateCN23ServiceResponse implements ResultInterface
{
    private ?GenerateCN23V2ResponseType $return = null;

    public function getReturn(): ?GenerateCN23V2ResponseType
    {
        return $this->return;
    }

    public function withReturn(?GenerateCN23V2ResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
