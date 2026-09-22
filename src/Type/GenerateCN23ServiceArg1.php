<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateCN23ServiceArg1
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private TypeLetter $letter;

    private ?TypeFields $fields = null;

    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    public function withContractNumber(?string $contractNumber): static
    {
        $new = clone $this;
        $new->contractNumber = $contractNumber;

        return $new;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function withPassword(?string $password): static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getLetter(): TypeLetter
    {
        return $this->letter;
    }

    public function withLetter(TypeLetter $letter): static
    {
        $new = clone $this;
        $new->letter = $letter;

        return $new;
    }

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
