<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterService
{
    private string $productCode;

    private \DateTimeInterface $depositDate;

    private ?bool $mailBoxPicking = null;

    private ?\DateTimeInterface $mailBoxPickingDate = null;

    private ?int $vatCode = null;

    private ?int $vatPercentage = null;

    private ?int $vatAmount = null;

    private ?int $transportationAmount = null;

    private ?int $totalAmount = null;

    private ?string $orderNumber = null;

    private ?string $commercialName = null;

    private ?int $returnTypeChoice = null;

    private ?string $reseauPostal = null;

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

    public function getDepositDate(): \DateTimeInterface
    {
        return $this->depositDate;
    }

    public function withDepositDate(\DateTimeInterface $depositDate): static
    {
        $new = clone $this;
        $new->depositDate = $depositDate;

        return $new;
    }

    public function getMailBoxPicking(): ?bool
    {
        return $this->mailBoxPicking;
    }

    public function withMailBoxPicking(?bool $mailBoxPicking): static
    {
        $new = clone $this;
        $new->mailBoxPicking = $mailBoxPicking;

        return $new;
    }

    public function getMailBoxPickingDate(): ?\DateTimeInterface
    {
        return $this->mailBoxPickingDate;
    }

    public function withMailBoxPickingDate(?\DateTimeInterface $mailBoxPickingDate): static
    {
        $new = clone $this;
        $new->mailBoxPickingDate = $mailBoxPickingDate;

        return $new;
    }

    public function getVatCode(): ?int
    {
        return $this->vatCode;
    }

    public function withVatCode(?int $vatCode): static
    {
        $new = clone $this;
        $new->vatCode = $vatCode;

        return $new;
    }

    public function getVatPercentage(): ?int
    {
        return $this->vatPercentage;
    }

    public function withVatPercentage(?int $vatPercentage): static
    {
        $new = clone $this;
        $new->vatPercentage = $vatPercentage;

        return $new;
    }

    public function getVatAmount(): ?int
    {
        return $this->vatAmount;
    }

    public function withVatAmount(?int $vatAmount): static
    {
        $new = clone $this;
        $new->vatAmount = $vatAmount;

        return $new;
    }

    public function getTransportationAmount(): ?int
    {
        return $this->transportationAmount;
    }

    public function withTransportationAmount(?int $transportationAmount): static
    {
        $new = clone $this;
        $new->transportationAmount = $transportationAmount;

        return $new;
    }

    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    public function withTotalAmount(?int $totalAmount): static
    {
        $new = clone $this;
        $new->totalAmount = $totalAmount;

        return $new;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function withOrderNumber(?string $orderNumber): static
    {
        $new = clone $this;
        $new->orderNumber = $orderNumber;

        return $new;
    }

    public function getCommercialName(): ?string
    {
        return $this->commercialName;
    }

    public function withCommercialName(?string $commercialName): static
    {
        $new = clone $this;
        $new->commercialName = $commercialName;

        return $new;
    }

    public function getReturnTypeChoice(): ?int
    {
        return $this->returnTypeChoice;
    }

    public function withReturnTypeChoice(?int $returnTypeChoice): static
    {
        $new = clone $this;
        $new->returnTypeChoice = $returnTypeChoice;

        return $new;
    }

    public function getReseauPostal(): ?string
    {
        return $this->reseauPostal;
    }

    public function withReseauPostal(?string $reseauPostal): static
    {
        $new = clone $this;
        $new->reseauPostal = $reseauPostal;

        return $new;
    }
}
