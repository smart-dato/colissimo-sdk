<?php

namespace SmartDato\ColissimoSdk\Type;

class XmlV2Response extends XmlResponse
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
