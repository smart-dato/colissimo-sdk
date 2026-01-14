<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateLabelServiceArg1
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private \SmartDato\ColissimoSdk\Type\TypeOutputFormat $outputFormat;

    private \SmartDato\ColissimoSdk\Type\TypeLetter $letter;

    private ?\SmartDato\ColissimoSdk\Type\TypeFields $fields = null;

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

    public function getOutputFormat(): \SmartDato\ColissimoSdk\Type\TypeOutputFormat
    {
        return $this->outputFormat;
    }

    public function withOutputFormat(\SmartDato\ColissimoSdk\Type\TypeOutputFormat $outputFormat): static
    {
        $new = clone $this;
        $new->outputFormat = $outputFormat;

        return $new;
    }

    public function getLetter(): \SmartDato\ColissimoSdk\Type\TypeLetter
    {
        return $this->letter;
    }

    public function withLetter(\SmartDato\ColissimoSdk\Type\TypeLetter $letter): static
    {
        $new = clone $this;
        $new->letter = $letter;

        return $new;
    }

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
