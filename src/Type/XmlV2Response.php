<?php

namespace SmartDato\ColissimoSdk\Type;

class XmlV2Response extends XmlResponse
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
