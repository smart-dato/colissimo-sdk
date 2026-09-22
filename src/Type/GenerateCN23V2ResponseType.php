<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateCN23V2ResponseType extends BaseResponse
{
    private ?TypeFields $fields = null;

    /**
     * @var null | mixed
     */
    private mixed $cn23 = null;

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

    /**
     * @return null | mixed
     */
    public function getCn23(): mixed
    {
        return $this->cn23;
    }

    /**
     * @param  null | mixed  $cn23
     */
    public function withCn23(mixed $cn23): static
    {
        $new = clone $this;
        $new->cn23 = $cn23;

        return $new;
    }
}
