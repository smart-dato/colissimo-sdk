<?php

namespace SmartDato\ColissimoSdk\Type;

class Message
{
    private ?string $id = null;

    private ?string $messageContent = null;

    private ?string $type = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function withId(?string $id): static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    public function getMessageContent(): ?string
    {
        return $this->messageContent;
    }

    public function withMessageContent(?string $messageContent): static
    {
        $new = clone $this;
        $new->messageContent = $messageContent;

        return $new;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function withType(?string $type): static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }
}
