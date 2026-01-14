<?php

namespace SmartDato\ColissimoSdk\Type;

class GetLabelResponseType extends BaseResponse
{
    /**
     * @var null | mixed
     */
    private mixed $label = null;

    /**
     * @return null | mixed
     */
    public function getLabel(): mixed
    {
        return $this->label;
    }

    /**
     * @param  null | mixed  $label
     */
    public function withLabel(mixed $label): static
    {
        $new = clone $this;
        $new->label = $label;

        return $new;
    }
}
