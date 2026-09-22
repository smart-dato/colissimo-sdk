<?php

namespace SmartDato\ColissimoSdk\Type;

abstract class BaseResponse
{
    /**
     * @var null | array<int<0,max>, Message>
     */
    private ?array $messages = null;

    /**
     * @return null | array<int<0,max>, Message>
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param  null | array<int<0,max>, Message>  $messages
     */
    public function withMessages(?array $messages): static
    {
        $new = clone $this;
        $new->messages = $messages;

        return $new;
    }
}
