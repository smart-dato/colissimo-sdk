<?php

namespace SmartDato\ColissimoSdk\Type;

use SensitiveParameter;

class GenerateLabelGenerateLabelRequest
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private TypeOutputFormat $outputFormat;

    private ?TypeLetter $letter = null;

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

    public function withPassword(#[SensitiveParameter] ?string $password): static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getOutputFormat(): TypeOutputFormat
    {
        return $this->outputFormat;
    }

    public function withOutputFormat(TypeOutputFormat $outputFormat): static
    {
        $new = clone $this;
        $new->outputFormat = $outputFormat;

        return $new;
    }

    public function getLetter(): ?TypeLetter
    {
        return $this->letter;
    }

    public function withLetter(?TypeLetter $letter): static
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
