<?php

namespace SmartDato\ColissimoSdk\Type;

class ElementVisual
{
    private ?string $name = null;

    private ?string $position = null;

    private ?string $shortcut = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function withPosition(?string $position): static
    {
        $new = clone $this;
        $new->position = $position;

        return $new;
    }

    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }

    public function withShortcut(?string $shortcut): static
    {
        $new = clone $this;
        $new->shortcut = $shortcut;

        return $new;
    }
}
