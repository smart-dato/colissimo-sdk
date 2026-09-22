<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TrackResponse implements ResultInterface
{
    private ?SkybillInformationResult $return = null;

    public function getReturn(): ?SkybillInformationResult
    {
        return $this->return;
    }

    public function withReturn(?SkybillInformationResult $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
