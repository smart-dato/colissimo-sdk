<?php

namespace SmartDato\ColissimoSdk\Type;

class LabelV2Response extends LabelResponse
{
    private ?TypeFields $fields = null;

    public function getFields(): ?TypeFields
    {
        return $this->fields;
    }

    public function withFields(?TypeFields $fields): static
    {
        $new = clone $this;
        $new->fields = $fields;

        return $new;
    }
}
