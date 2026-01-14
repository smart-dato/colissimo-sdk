<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterOriginal
{
    private ?string $originalIdent = null;

    private ?string $originalInvoiceNumber = null;

    private ?\DateTimeInterface $originalInvoiceDate = null;

    private ?string $originalParcelNumber = null;

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

    public function getOriginalInvoiceNumber(): ?string
    {
        return $this->originalInvoiceNumber;
    }

    public function withOriginalInvoiceNumber(?string $originalInvoiceNumber): static
    {
        $new = clone $this;
        $new->originalInvoiceNumber = $originalInvoiceNumber;

        return $new;
    }

    public function getOriginalInvoiceDate(): ?\DateTimeInterface
    {
        return $this->originalInvoiceDate;
    }

    public function withOriginalInvoiceDate(?\DateTimeInterface $originalInvoiceDate): static
    {
        $new = clone $this;
        $new->originalInvoiceDate = $originalInvoiceDate;

        return $new;
    }

    public function getOriginalParcelNumber(): ?string
    {
        return $this->originalParcelNumber;
    }

    public function withOriginalParcelNumber(?string $originalParcelNumber): static
    {
        $new = clone $this;
        $new->originalParcelNumber = $originalParcelNumber;

        return $new;
    }
}
