<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateTokenResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\GenerateTokenV2ResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\GenerateTokenV2ResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\GenerateTokenV2ResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
