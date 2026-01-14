<?php

namespace SmartDato\ColissimoSdk\Type;

class XmlResponseAddressee
{
    private ?string $addresseeParcelRef = null;

    private ?bool $codeBarForReference = null;

    private ?string $serviceInfo = null;

    private ?string $promotionCode = null;

    private \SmartDato\ColissimoSdk\Type\TypeAdresse $address;

    public function getAddresseeParcelRef(): ?string
    {
        return $this->addresseeParcelRef;
    }

    public function withAddresseeParcelRef(?string $addresseeParcelRef): static
    {
        $new = clone $this;
        $new->addresseeParcelRef = $addresseeParcelRef;

        return $new;
    }

    public function getCodeBarForReference(): ?bool
    {
        return $this->codeBarForReference;
    }

    public function withCodeBarForReference(?bool $codeBarForReference): static
    {
        $new = clone $this;
        $new->codeBarForReference = $codeBarForReference;

        return $new;
    }

    public function getServiceInfo(): ?string
    {
        return $this->serviceInfo;
    }

    public function withServiceInfo(?string $serviceInfo): static
    {
        $new = clone $this;
        $new->serviceInfo = $serviceInfo;

        return $new;
    }

    public function getPromotionCode(): ?string
    {
        return $this->promotionCode;
    }

    public function withPromotionCode(?string $promotionCode): static
    {
        $new = clone $this;
        $new->promotionCode = $promotionCode;

        return $new;
    }

    public function getAddress(): \SmartDato\ColissimoSdk\Type\TypeAdresse
    {
        return $this->address;
    }

    public function withAddress(\SmartDato\ColissimoSdk\Type\TypeAdresse $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}
