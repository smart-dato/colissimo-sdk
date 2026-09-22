<?php

namespace SmartDato\ColissimoSdk\Type;

class TokenV2Response extends TokenResponse
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
