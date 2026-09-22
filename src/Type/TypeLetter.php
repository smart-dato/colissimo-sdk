<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetter
{
    private TypeLetterService $service;

    private TypeLetterParcel $parcel;

    private ?TypeLetterCustomsDeclarations $customsDeclarations = null;

    private ?TypeLetterSender $sender = null;

    private TypeLetterAddressee $addressee;

    private ?TypeAdresse $codSenderAddress = null;

    private ?TypeLetterUploadDocument $uploadDocument = null;

    public function getService(): TypeLetterService
    {
        return $this->service;
    }

    public function withService(TypeLetterService $service): static
    {
        $new = clone $this;
        $new->service = $service;

        return $new;
    }

    public function getParcel(): TypeLetterParcel
    {
        return $this->parcel;
    }

    public function withParcel(TypeLetterParcel $parcel): static
    {
        $new = clone $this;
        $new->parcel = $parcel;

        return $new;
    }

    public function getCustomsDeclarations(): ?TypeLetterCustomsDeclarations
    {
        return $this->customsDeclarations;
    }

    public function withCustomsDeclarations(?TypeLetterCustomsDeclarations $customsDeclarations): static
    {
        $new = clone $this;
        $new->customsDeclarations = $customsDeclarations;

        return $new;
    }

    public function getSender(): ?TypeLetterSender
    {
        return $this->sender;
    }

    public function withSender(?TypeLetterSender $sender): static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }

    public function getAddressee(): TypeLetterAddressee
    {
        return $this->addressee;
    }

    public function withAddressee(TypeLetterAddressee $addressee): static
    {
        $new = clone $this;
        $new->addressee = $addressee;

        return $new;
    }

    public function getCodSenderAddress(): ?TypeAdresse
    {
        return $this->codSenderAddress;
    }

    public function withCodSenderAddress(?TypeAdresse $codSenderAddress): static
    {
        $new = clone $this;
        $new->codSenderAddress = $codSenderAddress;

        return $new;
    }

    public function getUploadDocument(): ?TypeLetterUploadDocument
    {
        return $this->uploadDocument;
    }

    public function withUploadDocument(?TypeLetterUploadDocument $uploadDocument): static
    {
        $new = clone $this;
        $new->uploadDocument = $uploadDocument;

        return $new;
    }
}
