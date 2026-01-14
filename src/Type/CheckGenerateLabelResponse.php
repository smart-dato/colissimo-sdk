<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CheckGenerateLabelResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelResponseType $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelResponseType
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\CheckGenerateLabelResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
