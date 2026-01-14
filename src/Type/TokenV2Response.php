<?php

namespace SmartDato\ColissimoSdk\Type;

class TokenV2Response extends TokenResponse
{
    private ?\SmartDato\ColissimoSdk\Type\TypeFields $fields = null;

    public function getFields(): ?\SmartDato\ColissimoSdk\Type\TypeFields
    {
        return $this->fields;
    }

    public function withFields(?\SmartDato\ColissimoSdk\Type\TypeFields $fields): static
    {
        $new = clone $this;
        $new->fields = $fields;

        return $new;
    }
}
