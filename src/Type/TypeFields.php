<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeFields
{
    /**
     * @var null | array<int<0,max>, TypeFieldsField>
     */
    private ?array $field = null;

    /**
     * @return null | array<int<0,max>, TypeFieldsField>
     */
    public function getField(): ?array
    {
        return $this->field;
    }

    /**
     * @param  null | array<int<0,max>, TypeFieldsField>  $field
     */
    public function withField(?array $field): static
    {
        $new = clone $this;
        $new->field = $field;

        return $new;
    }
}
