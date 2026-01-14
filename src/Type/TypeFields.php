<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeFields
{
    /**
     * @var null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeFieldsField>
     */
    private ?array $field = null;

    /**
     * @return null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeFieldsField>
     */
    public function getField(): ?array
    {
        return $this->field;
    }

    /**
     * @param  null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeFieldsField>  $field
     */
    public function withField(?array $field): static
    {
        $new = clone $this;
        $new->field = $field;

        return $new;
    }
}
