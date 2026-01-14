<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TrackResponse implements ResultInterface
{
    private ?\SmartDato\ColissimoSdk\Type\SkybillInformationResult $return = null;

    public function getReturn(): ?\SmartDato\ColissimoSdk\Type\SkybillInformationResult
    {
        return $this->return;
    }

    public function withReturn(?\SmartDato\ColissimoSdk\Type\SkybillInformationResult $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
