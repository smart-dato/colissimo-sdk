<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CheckGenerateLabelResponse implements ResultInterface
{
    private ?CheckGenerateLabelResponseType $return = null;

    public function getReturn(): ?CheckGenerateLabelResponseType
    {
        return $this->return;
    }

    public function withReturn(?CheckGenerateLabelResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
