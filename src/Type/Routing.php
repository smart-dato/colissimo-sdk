<?php

namespace SmartDato\ColissimoSdk\Type;

class Routing
{
    private ?string $barcodeId = null;

    private ?string $depotDest = null;

    private ?string $destinationCountry = null;

    private ?string $destinationCountryText = null;

    private ?string $groupingPriorityLabel = null;

    private ?string $partnerType = null;

    private ?string $routingVersion = null;

    private ?string $serviceMark = null;

    private ?string $serviceText = null;

    private ?string $sortDest = null;

    private ?string $sortOrigin = null;

    public function getBarcodeId(): ?string
    {
        return $this->barcodeId;
    }

    public function withBarcodeId(?string $barcodeId): static
    {
        $new = clone $this;
        $new->barcodeId = $barcodeId;

        return $new;
    }

    public function getDepotDest(): ?string
    {
        return $this->depotDest;
    }

    public function withDepotDest(?string $depotDest): static
    {
        $new = clone $this;
        $new->depotDest = $depotDest;

        return $new;
    }

    public function getDestinationCountry(): ?string
    {
        return $this->destinationCountry;
    }

    public function withDestinationCountry(?string $destinationCountry): static
    {
        $new = clone $this;
        $new->destinationCountry = $destinationCountry;

        return $new;
    }

    public function getDestinationCountryText(): ?string
    {
        return $this->destinationCountryText;
    }

    public function withDestinationCountryText(?string $destinationCountryText): static
    {
        $new = clone $this;
        $new->destinationCountryText = $destinationCountryText;

        return $new;
    }

    public function getGroupingPriorityLabel(): ?string
    {
        return $this->groupingPriorityLabel;
    }

    public function withGroupingPriorityLabel(?string $groupingPriorityLabel): static
    {
        $new = clone $this;
        $new->groupingPriorityLabel = $groupingPriorityLabel;

        return $new;
    }

    public function getPartnerType(): ?string
    {
        return $this->partnerType;
    }

    public function withPartnerType(?string $partnerType): static
    {
        $new = clone $this;
        $new->partnerType = $partnerType;

        return $new;
    }

    public function getRoutingVersion(): ?string
    {
        return $this->routingVersion;
    }

    public function withRoutingVersion(?string $routingVersion): static
    {
        $new = clone $this;
        $new->routingVersion = $routingVersion;

        return $new;
    }

    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }

    public function withServiceMark(?string $serviceMark): static
    {
        $new = clone $this;
        $new->serviceMark = $serviceMark;

        return $new;
    }

    public function getServiceText(): ?string
    {
        return $this->serviceText;
    }

    public function withServiceText(?string $serviceText): static
    {
        $new = clone $this;
        $new->serviceText = $serviceText;

        return $new;
    }

    public function getSortDest(): ?string
    {
        return $this->sortDest;
    }

    public function withSortDest(?string $sortDest): static
    {
        $new = clone $this;
        $new->sortDest = $sortDest;

        return $new;
    }

    public function getSortOrigin(): ?string
    {
        return $this->sortOrigin;
    }

    public function withSortOrigin(?string $sortOrigin): static
    {
        $new = clone $this;
        $new->sortOrigin = $sortOrigin;

        return $new;
    }
}
