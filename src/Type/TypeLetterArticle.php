<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterArticle
{
    private ?string $description = null;

    private int $quantity;

    private float $weight;

    private float $value;

    private ?string $hsCode = null;

    private ?string $originCountry = null;

    private ?string $currency = null;

    private ?string $artref = null;

    private ?string $originalIdent = null;

    private ?float $vatAmount = null;

    private ?float $customsFees = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function withQuantity(int $quantity): static
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function withWeight(float $weight): static
    {
        $new = clone $this;
        $new->weight = $weight;

        return $new;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function withValue(float $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }

    public function withHsCode(?string $hsCode): static
    {
        $new = clone $this;
        $new->hsCode = $hsCode;

        return $new;
    }

    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }

    public function withOriginCountry(?string $originCountry): static
    {
        $new = clone $this;
        $new->originCountry = $originCountry;

        return $new;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function withCurrency(?string $currency): static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }

    public function getArtref(): ?string
    {
        return $this->artref;
    }

    public function withArtref(?string $artref): static
    {
        $new = clone $this;
        $new->artref = $artref;

        return $new;
    }

    public function getOriginalIdent(): ?string
    {
        return $this->originalIdent;
    }

    public function withOriginalIdent(?string $originalIdent): static
    {
        $new = clone $this;
        $new->originalIdent = $originalIdent;

        return $new;
    }

    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }

    public function withVatAmount(?float $vatAmount): static
    {
        $new = clone $this;
        $new->vatAmount = $vatAmount;

        return $new;
    }

    public function getCustomsFees(): ?float
    {
        return $this->customsFees;
    }

    public function withCustomsFees(?float $customsFees): static
    {
        $new = clone $this;
        $new->customsFees = $customsFees;

        return $new;
    }
}
