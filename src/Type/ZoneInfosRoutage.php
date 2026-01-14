<?php

namespace SmartDato\ColissimoSdk\Type;

class ZoneInfosRoutage
{
    private ?string $controlKeyTrackingNumber = null;

    private ?string $datePrinting = null;

    private ?string $hourPrinting = null;

    private ?string $identificationDestination1 = null;

    private ?string $identificationDestination2 = null;

    private ?string $MSort = null;

    private ?string $numberVersionWS = null;

    private ?string $routingVersion = null;

    private ?string $serviceMark = null;

    private ?string $sortDest = null;

    private ?string $sortOrigin = null;

    private ?string $trackingNumberRouting = null;

    private ?string $typeServiceLivraison = null;

    private ?string $rDepot = null;

    public function getControlKeyTrackingNumber(): ?string
    {
        return $this->controlKeyTrackingNumber;
    }

    public function withControlKeyTrackingNumber(?string $controlKeyTrackingNumber): static
    {
        $new = clone $this;
        $new->controlKeyTrackingNumber = $controlKeyTrackingNumber;

        return $new;
    }

    public function getDatePrinting(): ?string
    {
        return $this->datePrinting;
    }

    public function withDatePrinting(?string $datePrinting): static
    {
        $new = clone $this;
        $new->datePrinting = $datePrinting;

        return $new;
    }

    public function getHourPrinting(): ?string
    {
        return $this->hourPrinting;
    }

    public function withHourPrinting(?string $hourPrinting): static
    {
        $new = clone $this;
        $new->hourPrinting = $hourPrinting;

        return $new;
    }

    public function getIdentificationDestination1(): ?string
    {
        return $this->identificationDestination1;
    }

    public function withIdentificationDestination1(?string $identificationDestination1): static
    {
        $new = clone $this;
        $new->identificationDestination1 = $identificationDestination1;

        return $new;
    }

    public function getIdentificationDestination2(): ?string
    {
        return $this->identificationDestination2;
    }

    public function withIdentificationDestination2(?string $identificationDestination2): static
    {
        $new = clone $this;
        $new->identificationDestination2 = $identificationDestination2;

        return $new;
    }

    public function getMSort(): ?string
    {
        return $this->MSort;
    }

    public function withMSort(?string $MSort): static
    {
        $new = clone $this;
        $new->MSort = $MSort;

        return $new;
    }

    public function getNumberVersionWS(): ?string
    {
        return $this->numberVersionWS;
    }

    public function withNumberVersionWS(?string $numberVersionWS): static
    {
        $new = clone $this;
        $new->numberVersionWS = $numberVersionWS;

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

    public function getTrackingNumberRouting(): ?string
    {
        return $this->trackingNumberRouting;
    }

    public function withTrackingNumberRouting(?string $trackingNumberRouting): static
    {
        $new = clone $this;
        $new->trackingNumberRouting = $trackingNumberRouting;

        return $new;
    }

    public function getTypeServiceLivraison(): ?string
    {
        return $this->typeServiceLivraison;
    }

    public function withTypeServiceLivraison(?string $typeServiceLivraison): static
    {
        $new = clone $this;
        $new->typeServiceLivraison = $typeServiceLivraison;

        return $new;
    }

    public function getRDepot(): ?string
    {
        return $this->rDepot;
    }

    public function withRDepot(?string $rDepot): static
    {
        $new = clone $this;
        $new->rDepot = $rDepot;

        return $new;
    }
}
