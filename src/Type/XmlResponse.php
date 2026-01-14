<?php

namespace SmartDato\ColissimoSdk\Type;

class XmlResponse
{
    /**
     * @var null | mixed
     */
    private mixed $cn23 = null;

    private ?\SmartDato\ColissimoSdk\Type\XmlResponseAddressee $addressee = null;

    private ?string $barCodeCityssimo = null;

    private ?string $barCodePCH = null;

    private ?string $barCodeRouting = null;

    private ?\SmartDato\ColissimoSdk\Type\BelgiumLabel $belgiumLabel = null;

    private ?string $cabAztec = null;

    private ?string $contractNumber = null;

    /**
     * @var null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\ElementVisual>
     */
    private ?array $elementVisual = null;

    private ?string $numberPCH = null;

    private ?string $numberRouting = null;

    private ?string $parcelNumber = null;

    private ?string $parcelNumberPartner = null;

    private ?\SmartDato\ColissimoSdk\Type\PickupLocation $pickupLocation = null;

    private ?\SmartDato\ColissimoSdk\Type\Routing $routing = null;

    private ?\SmartDato\ColissimoSdk\Type\XmlResponseSender $sender = null;

    private ?\SmartDato\ColissimoSdk\Type\Site $sitePCH = null;

    private ?\SmartDato\ColissimoSdk\Type\SwissLabel $swissLabel = null;

    private ?\SmartDato\ColissimoSdk\Type\ZoneRouting $zoneRouting = null;

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

    public function getAddressee(): ?\SmartDato\ColissimoSdk\Type\XmlResponseAddressee
    {
        return $this->addressee;
    }

    public function withAddressee(?\SmartDato\ColissimoSdk\Type\XmlResponseAddressee $addressee): static
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

    public function getBelgiumLabel(): ?\SmartDato\ColissimoSdk\Type\BelgiumLabel
    {
        return $this->belgiumLabel;
    }

    public function withBelgiumLabel(?\SmartDato\ColissimoSdk\Type\BelgiumLabel $belgiumLabel): static
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
     * @return null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\ElementVisual>
     */
    public function getElementVisual(): ?array
    {
        return $this->elementVisual;
    }

    /**
     * @param  null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\ElementVisual>  $elementVisual
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

    public function getPickupLocation(): ?\SmartDato\ColissimoSdk\Type\PickupLocation
    {
        return $this->pickupLocation;
    }

    public function withPickupLocation(?\SmartDato\ColissimoSdk\Type\PickupLocation $pickupLocation): static
    {
        $new = clone $this;
        $new->pickupLocation = $pickupLocation;

        return $new;
    }

    public function getRouting(): ?\SmartDato\ColissimoSdk\Type\Routing
    {
        return $this->routing;
    }

    public function withRouting(?\SmartDato\ColissimoSdk\Type\Routing $routing): static
    {
        $new = clone $this;
        $new->routing = $routing;

        return $new;
    }

    public function getSender(): ?\SmartDato\ColissimoSdk\Type\XmlResponseSender
    {
        return $this->sender;
    }

    public function withSender(?\SmartDato\ColissimoSdk\Type\XmlResponseSender $sender): static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }

    public function getSitePCH(): ?\SmartDato\ColissimoSdk\Type\Site
    {
        return $this->sitePCH;
    }

    public function withSitePCH(?\SmartDato\ColissimoSdk\Type\Site $sitePCH): static
    {
        $new = clone $this;
        $new->sitePCH = $sitePCH;

        return $new;
    }

    public function getSwissLabel(): ?\SmartDato\ColissimoSdk\Type\SwissLabel
    {
        return $this->swissLabel;
    }

    public function withSwissLabel(?\SmartDato\ColissimoSdk\Type\SwissLabel $swissLabel): static
    {
        $new = clone $this;
        $new->swissLabel = $swissLabel;

        return $new;
    }

    public function getZoneRouting(): ?\SmartDato\ColissimoSdk\Type\ZoneRouting
    {
        return $this->zoneRouting;
    }

    public function withZoneRouting(?\SmartDato\ColissimoSdk\Type\ZoneRouting $zoneRouting): static
    {
        $new = clone $this;
        $new->zoneRouting = $zoneRouting;

        return $new;
    }
}
