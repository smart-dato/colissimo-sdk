<?php

namespace SmartDato\ColissimoSdk\Type;

class XmlResponse
{
    /**
     * @var null | mixed
     */
    private mixed $cn23 = null;

    private ?XmlResponseAddressee $addressee = null;

    private ?string $barCodeCityssimo = null;

    private ?string $barCodePCH = null;

    private ?string $barCodeRouting = null;

    private ?BelgiumLabel $belgiumLabel = null;

    private ?string $cabAztec = null;

    private ?string $contractNumber = null;

    /**
     * @var null | array<int<0,max>, ElementVisual>
     */
    private ?array $elementVisual = null;

    private ?string $numberPCH = null;

    private ?string $numberRouting = null;

    private ?string $parcelNumber = null;

    private ?string $parcelNumberPartner = null;

    private ?PickupLocation $pickupLocation = null;

    private ?Routing $routing = null;

    private ?XmlResponseSender $sender = null;

    private ?Site $sitePCH = null;

    private ?SwissLabel $swissLabel = null;

    private ?ZoneRouting $zoneRouting = null;

    /**
     * @return null | mixed
     */
    public function getCn23(): mixed
    {
        return $this->cn23;
    }

    /**
     * @param  null | mixed  $cn23
     */
    public function withCn23(mixed $cn23): static
    {
        $new = clone $this;
        $new->cn23 = $cn23;

        return $new;
    }

    public function getAddressee(): ?XmlResponseAddressee
    {
        return $this->addressee;
    }

    public function withAddressee(?XmlResponseAddressee $addressee): static
    {
        $new = clone $this;
        $new->addressee = $addressee;

        return $new;
    }

    public function getBarCodeCityssimo(): ?string
    {
        return $this->barCodeCityssimo;
    }

    public function withBarCodeCityssimo(?string $barCodeCityssimo): static
    {
        $new = clone $this;
        $new->barCodeCityssimo = $barCodeCityssimo;

        return $new;
    }

    public function getBarCodePCH(): ?string
    {
        return $this->barCodePCH;
    }

    public function withBarCodePCH(?string $barCodePCH): static
    {
        $new = clone $this;
        $new->barCodePCH = $barCodePCH;

        return $new;
    }

    public function getBarCodeRouting(): ?string
    {
        return $this->barCodeRouting;
    }

    public function withBarCodeRouting(?string $barCodeRouting): static
    {
        $new = clone $this;
        $new->barCodeRouting = $barCodeRouting;

        return $new;
    }

    public function getBelgiumLabel(): ?BelgiumLabel
    {
        return $this->belgiumLabel;
    }

    public function withBelgiumLabel(?BelgiumLabel $belgiumLabel): static
    {
        $new = clone $this;
        $new->belgiumLabel = $belgiumLabel;

        return $new;
    }

    public function getCabAztec(): ?string
    {
        return $this->cabAztec;
    }

    public function withCabAztec(?string $cabAztec): static
    {
        $new = clone $this;
        $new->cabAztec = $cabAztec;

        return $new;
    }

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

    /**
     * @return null | array<int<0,max>, ElementVisual>
     */
    public function getElementVisual(): ?array
    {
        return $this->elementVisual;
    }

    /**
     * @param  null | array<int<0,max>, ElementVisual>  $elementVisual
     */
    public function withElementVisual(?array $elementVisual): static
    {
        $new = clone $this;
        $new->elementVisual = $elementVisual;

        return $new;
    }

    public function getNumberPCH(): ?string
    {
        return $this->numberPCH;
    }

    public function withNumberPCH(?string $numberPCH): static
    {
        $new = clone $this;
        $new->numberPCH = $numberPCH;

        return $new;
    }

    public function getNumberRouting(): ?string
    {
        return $this->numberRouting;
    }

    public function withNumberRouting(?string $numberRouting): static
    {
        $new = clone $this;
        $new->numberRouting = $numberRouting;

        return $new;
    }

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

    public function getParcelNumberPartner(): ?string
    {
        return $this->parcelNumberPartner;
    }

    public function withParcelNumberPartner(?string $parcelNumberPartner): static
    {
        $new = clone $this;
        $new->parcelNumberPartner = $parcelNumberPartner;

        return $new;
    }

    public function getPickupLocation(): ?PickupLocation
    {
        return $this->pickupLocation;
    }

    public function withPickupLocation(?PickupLocation $pickupLocation): static
    {
        $new = clone $this;
        $new->pickupLocation = $pickupLocation;

        return $new;
    }

    public function getRouting(): ?Routing
    {
        return $this->routing;
    }

    public function withRouting(?Routing $routing): static
    {
        $new = clone $this;
        $new->routing = $routing;

        return $new;
    }

    public function getSender(): ?XmlResponseSender
    {
        return $this->sender;
    }

    public function withSender(?XmlResponseSender $sender): static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }

    public function getSitePCH(): ?Site
    {
        return $this->sitePCH;
    }

    public function withSitePCH(?Site $sitePCH): static
    {
        $new = clone $this;
        $new->sitePCH = $sitePCH;

        return $new;
    }

    public function getSwissLabel(): ?SwissLabel
    {
        return $this->swissLabel;
    }

    public function withSwissLabel(?SwissLabel $swissLabel): static
    {
        $new = clone $this;
        $new->swissLabel = $swissLabel;

        return $new;
    }

    public function getZoneRouting(): ?ZoneRouting
    {
        return $this->zoneRouting;
    }

    public function withZoneRouting(?ZoneRouting $zoneRouting): static
    {
        $new = clone $this;
        $new->zoneRouting = $zoneRouting;

        return $new;
    }
}
