<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeAdresse
{
    private ?string $companyName = null;

    private ?string $lastName = null;

    private ?string $firstName = null;

    private ?string $line0 = null;

    private ?string $line1 = null;

    private ?string $line2 = null;

    private ?string $line3 = null;

    private ?string $countryCode = null;

    private ?string $city = null;

    private ?string $zipCode = null;

    private ?string $phoneNumber = null;

    private ?string $mobileNumber = null;

    private ?string $doorCode1 = null;

    private ?string $doorCode2 = null;

    private ?string $email = null;

    private ?string $intercom = null;

    private ?string $language = null;

    private ?string $stateOrProvinceCode = null;

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

    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    public function withMobileNumber(?string $mobileNumber): static
    {
        $new = clone $this;
        $new->mobileNumber = $mobileNumber;

        return $new;
    }

    public function getDoorCode1(): ?string
    {
        return $this->doorCode1;
    }

    public function withDoorCode1(?string $doorCode1): static
    {
        $new = clone $this;
        $new->doorCode1 = $doorCode1;

        return $new;
    }

    public function getDoorCode2(): ?string
    {
        return $this->doorCode2;
    }

    public function withDoorCode2(?string $doorCode2): static
    {
        $new = clone $this;
        $new->doorCode2 = $doorCode2;

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

    public function getIntercom(): ?string
    {
        return $this->intercom;
    }

    public function withIntercom(?string $intercom): static
    {
        $new = clone $this;
        $new->intercom = $intercom;

        return $new;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function withLanguage(?string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    public function getStateOrProvinceCode(): ?string
    {
        return $this->stateOrProvinceCode;
    }

    public function withStateOrProvinceCode(?string $stateOrProvinceCode): static
    {
        $new = clone $this;
        $new->stateOrProvinceCode = $stateOrProvinceCode;

        return $new;
    }
}
