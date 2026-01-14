<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterParcel
{
    private ?string $parcelNumber = null;

    private ?int $insuranceAmount = null;

    private ?int $insuranceValue = null;

    private ?string $recommendationLevel = null;

    private ?float $weight = null;

    private ?bool $nonMachinable = null;

    private ?bool $COD = null;

    private ?int $CODAmount = null;

    private ?string $CODCurrency = null;

    private ?bool $returnReceipt = null;

    private ?string $instructions = null;

    private ?string $pickupLocationId = null;

    private ?bool $ftd = null;

    private ?bool $ddp = null;

    private ?string $disabledDeliveryBlockingCode = null;

    public function getParcelNumber(): ?string
    {
        return $this->parcelNumber;
    }

    public function withParcelNumber(?string $parcelNumber): static
    {
        $new = clone $this;
        $new->parcelNumber = $parcelNumber;

        return $new;
    }

    public function getInsuranceAmount(): ?int
    {
        return $this->insuranceAmount;
    }

    public function withInsuranceAmount(?int $insuranceAmount): static
    {
        $new = clone $this;
        $new->insuranceAmount = $insuranceAmount;

        return $new;
    }

    public function getInsuranceValue(): ?int
    {
        return $this->insuranceValue;
    }

    public function withInsuranceValue(?int $insuranceValue): static
    {
        $new = clone $this;
        $new->insuranceValue = $insuranceValue;

        return $new;
    }

    public function getRecommendationLevel(): ?string
    {
        return $this->recommendationLevel;
    }

    public function withRecommendationLevel(?string $recommendationLevel): static
    {
        $new = clone $this;
        $new->recommendationLevel = $recommendationLevel;

        return $new;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function withWeight(?float $weight): static
    {
        $new = clone $this;
        $new->weight = $weight;

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

    public function getCOD(): ?bool
    {
        return $this->COD;
    }

    public function withCOD(?bool $COD): static
    {
        $new = clone $this;
        $new->COD = $COD;

        return $new;
    }

    public function getCODAmount(): ?int
    {
        return $this->CODAmount;
    }

    public function withCODAmount(?int $CODAmount): static
    {
        $new = clone $this;
        $new->CODAmount = $CODAmount;

        return $new;
    }

    public function getCODCurrency(): ?string
    {
        return $this->CODCurrency;
    }

    public function withCODCurrency(?string $CODCurrency): static
    {
        $new = clone $this;
        $new->CODCurrency = $CODCurrency;

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

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function withInstructions(?string $instructions): static
    {
        $new = clone $this;
        $new->instructions = $instructions;

        return $new;
    }

    public function getPickupLocationId(): ?string
    {
        return $this->pickupLocationId;
    }

    public function withPickupLocationId(?string $pickupLocationId): static
    {
        $new = clone $this;
        $new->pickupLocationId = $pickupLocationId;

        return $new;
    }

    public function getFtd(): ?bool
    {
        return $this->ftd;
    }

    public function withFtd(?bool $ftd): static
    {
        $new = clone $this;
        $new->ftd = $ftd;

        return $new;
    }

    public function getDdp(): ?bool
    {
        return $this->ddp;
    }

    public function withDdp(?bool $ddp): static
    {
        $new = clone $this;
        $new->ddp = $ddp;

        return $new;
    }

    public function getDisabledDeliveryBlockingCode(): ?string
    {
        return $this->disabledDeliveryBlockingCode;
    }

    public function withDisabledDeliveryBlockingCode(?string $disabledDeliveryBlockingCode): static
    {
        $new = clone $this;
        $new->disabledDeliveryBlockingCode = $disabledDeliveryBlockingCode;

        return $new;
    }
}
