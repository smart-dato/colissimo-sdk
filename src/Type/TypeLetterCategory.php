<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterCategory
{
    private int $value;

    public function getValue(): int
    {
        return $this->value;
    }

    public function withValue(int $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}
