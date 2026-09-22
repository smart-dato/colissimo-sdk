<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterCustomsDeclarations
{
    private ?bool $includeCustomsDeclarations = null;

    private ?int $numberOfCopies = null;

    private ?TypeLetterContents $contents = null;

    private ?string $importersReference = null;

    private ?string $importersContact = null;

    private ?string $officeOrigin = null;

    private ?string $comments = null;

    private ?string $description = null;

    private ?string $invoiceNumber = null;

    private ?string $licenceNumber = null;

    private ?string $certificatNumber = null;

    private ?TypeAdresse $importerAddress = null;

    public function getIncludeCustomsDeclarations(): ?bool
    {
        return $this->includeCustomsDeclarations;
    }

    public function withIncludeCustomsDeclarations(?bool $includeCustomsDeclarations): static
    {
        $new = clone $this;
        $new->includeCustomsDeclarations = $includeCustomsDeclarations;

        return $new;
    }

    public function getNumberOfCopies(): ?int
    {
        return $this->numberOfCopies;
    }

    public function withNumberOfCopies(?int $numberOfCopies): static
    {
        $new = clone $this;
        $new->numberOfCopies = $numberOfCopies;

        return $new;
    }

    public function getContents(): ?TypeLetterContents
    {
        return $this->contents;
    }

    public function withContents(?TypeLetterContents $contents): static
    {
        $new = clone $this;
        $new->contents = $contents;

        return $new;
    }

    public function getImportersReference(): ?string
    {
        return $this->importersReference;
    }

    public function withImportersReference(?string $importersReference): static
    {
        $new = clone $this;
        $new->importersReference = $importersReference;

        return $new;
    }

    public function getImportersContact(): ?string
    {
        return $this->importersContact;
    }

    public function withImportersContact(?string $importersContact): static
    {
        $new = clone $this;
        $new->importersContact = $importersContact;

        return $new;
    }

    public function getOfficeOrigin(): ?string
    {
        return $this->officeOrigin;
    }

    public function withOfficeOrigin(?string $officeOrigin): static
    {
        $new = clone $this;
        $new->officeOrigin = $officeOrigin;

        return $new;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function withComments(?string $comments): static
    {
        $new = clone $this;
        $new->comments = $comments;

        return $new;
    }

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

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function withInvoiceNumber(?string $invoiceNumber): static
    {
        $new = clone $this;
        $new->invoiceNumber = $invoiceNumber;

        return $new;
    }

    public function getLicenceNumber(): ?string
    {
        return $this->licenceNumber;
    }

    public function withLicenceNumber(?string $licenceNumber): static
    {
        $new = clone $this;
        $new->licenceNumber = $licenceNumber;

        return $new;
    }

    public function getCertificatNumber(): ?string
    {
        return $this->certificatNumber;
    }

    public function withCertificatNumber(?string $certificatNumber): static
    {
        $new = clone $this;
        $new->certificatNumber = $certificatNumber;

        return $new;
    }

    public function getImporterAddress(): ?TypeAdresse
    {
        return $this->importerAddress;
    }

    public function withImporterAddress(?TypeAdresse $importerAddress): static
    {
        $new = clone $this;
        $new->importerAddress = $importerAddress;

        return $new;
    }
}
