<?php

namespace SmartDato\ColissimoSdk\Type;

class TypePlanPickupSender
{
    private ?string $companyName = null;

    private ?string $lastName = null;

    private ?string $firstName = null;

    private ?string $line0 = null;

    private ?string $line1 = null;

    private ?string $line2 = null;

    private ?string $line3 = null;

    private string $zipCode;

    private ?string $city = null;

    private ?string $countryCode = null;

    private ?string $email = null;

    private ?string $phoneNumber = null;

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function withCompanyName(?string $companyName): static
    {
        $new = clone $this;
        $new->companyName = $companyName;

        return $new;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function withLastName(?string $lastName): static
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function withFirstName(?string $firstName): static
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    public function getLine0(): ?string
    {
        return $this->line0;
    }

    public function withLine0(?string $line0): static
    {
        $new = clone $this;
        $new->line0 = $line0;

        return $new;
    }

    public function getLine1(): ?string
    {
        return $this->line1;
    }

    public function withLine1(?string $line1): static
    {
        $new = clone $this;
        $new->line1 = $line1;

        return $new;
    }

    public function getLine2(): ?string
    {
        return $this->line2;
    }

    public function withLine2(?string $line2): static
    {
        $new = clone $this;
        $new->line2 = $line2;

        return $new;
    }

    public function getLine3(): ?string
    {
        return $this->line3;
    }

    public function withLine3(?string $line3): static
    {
        $new = clone $this;
        $new->line3 = $line3;

        return $new;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function withZipCode(string $zipCode): static
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function withEmail(?string $email): static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function withPhoneNumber(?string $phoneNumber): static
    {
        $new = clone $this;
        $new->phoneNumber = $phoneNumber;

        return $new;
    }
}
