<?php

namespace SmartDato\ColissimoSdk\Type;

class BordereauHeader
{
    private ?string $address = null;

    private int $bordereauNumber;

    private ?string $clientNumber = null;

    private ?int $codeSitePCH = null;

    private ?string $company = null;

    private ?string $nameSitePCH = null;

    private int $numberOfParcels;

    private ?\DateTimeInterface $publishingDate = null;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function withAddress(?string $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    public function getBordereauNumber(): int
    {
        return $this->bordereauNumber;
    }

    public function withBordereauNumber(int $bordereauNumber): static
    {
        $new = clone $this;
        $new->bordereauNumber = $bordereauNumber;

        return $new;
    }

    public function getClientNumber(): ?string
    {
        return $this->clientNumber;
    }

    public function withClientNumber(?string $clientNumber): static
    {
        $new = clone $this;
        $new->clientNumber = $clientNumber;

        return $new;
    }

    public function getCodeSitePCH(): ?int
    {
        return $this->codeSitePCH;
    }

    public function withCodeSitePCH(?int $codeSitePCH): static
    {
        $new = clone $this;
        $new->codeSitePCH = $codeSitePCH;

        return $new;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function withCompany(?string $company): static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    public function getNameSitePCH(): ?string
    {
        return $this->nameSitePCH;
    }

    public function withNameSitePCH(?string $nameSitePCH): static
    {
        $new = clone $this;
        $new->nameSitePCH = $nameSitePCH;

        return $new;
    }

    public function getNumberOfParcels(): int
    {
        return $this->numberOfParcels;
    }

    public function withNumberOfParcels(int $numberOfParcels): static
    {
        $new = clone $this;
        $new->numberOfParcels = $numberOfParcels;

        return $new;
    }

    public function getPublishingDate(): ?\DateTimeInterface
    {
        return $this->publishingDate;
    }

    public function withPublishingDate(?\DateTimeInterface $publishingDate): static
    {
        $new = clone $this;
        $new->publishingDate = $publishingDate;

        return $new;
    }
}
