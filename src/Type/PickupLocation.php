<?php

namespace SmartDato\ColissimoSdk\Type;

class PickupLocation
{
    private ?AddressPickupLocation $address = null;

    private ?string $groupRouting = null;

    private ?string $idPartenaire = null;

    private ?string $name = null;

    private ?string $netWork = null;

    private ?string $pointId = null;

    private ?string $routingFileVersion = null;

    private ?string $routingZipCode = null;

    private ?string $serviceLabel = null;

    private ?string $sortDistribution = null;

    public function getAddress(): ?AddressPickupLocation
    {
        return $this->address;
    }

    public function withAddress(?AddressPickupLocation $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    public function getGroupRouting(): ?string
    {
        return $this->groupRouting;
    }

    public function withGroupRouting(?string $groupRouting): static
    {
        $new = clone $this;
        $new->groupRouting = $groupRouting;

        return $new;
    }

    public function getIdPartenaire(): ?string
    {
        return $this->idPartenaire;
    }

    public function withIdPartenaire(?string $idPartenaire): static
    {
        $new = clone $this;
        $new->idPartenaire = $idPartenaire;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getNetWork(): ?string
    {
        return $this->netWork;
    }

    public function withNetWork(?string $netWork): static
    {
        $new = clone $this;
        $new->netWork = $netWork;

        return $new;
    }

    public function getPointId(): ?string
    {
        return $this->pointId;
    }

    public function withPointId(?string $pointId): static
    {
        $new = clone $this;
        $new->pointId = $pointId;

        return $new;
    }

    public function getRoutingFileVersion(): ?string
    {
        return $this->routingFileVersion;
    }

    public function withRoutingFileVersion(?string $routingFileVersion): static
    {
        $new = clone $this;
        $new->routingFileVersion = $routingFileVersion;

        return $new;
    }

    public function getRoutingZipCode(): ?string
    {
        return $this->routingZipCode;
    }

    public function withRoutingZipCode(?string $routingZipCode): static
    {
        $new = clone $this;
        $new->routingZipCode = $routingZipCode;

        return $new;
    }

    public function getServiceLabel(): ?string
    {
        return $this->serviceLabel;
    }

    public function withServiceLabel(?string $serviceLabel): static
    {
        $new = clone $this;
        $new->serviceLabel = $serviceLabel;

        return $new;
    }

    public function getSortDistribution(): ?string
    {
        return $this->sortDistribution;
    }

    public function withSortDistribution(?string $sortDistribution): static
    {
        $new = clone $this;
        $new->sortDistribution = $sortDistribution;

        return $new;
    }
}
