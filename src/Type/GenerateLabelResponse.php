<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateLabelResponse implements ResultInterface
{
    private ?GenerateLabelV2ResponseType $return = null;

    public function getReturn(): ?GenerateLabelV2ResponseType
    {
        return $this->return;
    }

    public function withReturn(?GenerateLabelV2ResponseType $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
