<?php

namespace SmartDato\ColissimoSdk\Type;

class GetProductInterRequest
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private string $productCode;

    private ?bool $insurance = null;

    private ?bool $nonMachinable = null;

    private ?bool $returnReceipt = null;

    private ?string $countryCode = null;

    private ?string $zipCode = null;

    private ?string $city = null;

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

    public function getProductCode(): string
    {
        return $this->productCode;
    }

    public function withProductCode(string $productCode): static
    {
        $new = clone $this;
        $new->productCode = $productCode;

        return $new;
    }

    public function getInsurance(): ?bool
    {
        return $this->insurance;
    }

    public function withInsurance(?bool $insurance): static
    {
        $new = clone $this;
        $new->insurance = $insurance;

        return $new;
    }

    public function getNonMachinable(): ?bool
    {
        return $this->nonMachinable;
    }

    public function withNonMachinable(?bool $nonMachinable): static
    {
        $new = clone $this;
        $new->nonMachinable = $nonMachinable;

        return $new;
    }

    public function getReturnReceipt(): ?bool
    {
        return $this->returnReceipt;
    }

    public function withReturnReceipt(?bool $returnReceipt): static
    {
        $new = clone $this;
        $new->returnReceipt = $returnReceipt;

        return $new;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function withCountryCode(?string $countryCode): static
    {
        $new = clone $this;
        $new->countryCode = $countryCode;

        return $new;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function withZipCode(?string $zipCode): static
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function withCity(?string $city): static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }
}
