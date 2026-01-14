<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetter
{
    private \SmartDato\ColissimoSdk\Type\TypeLetterService $service;

    private \SmartDato\ColissimoSdk\Type\TypeLetterParcel $parcel;

    private ?\SmartDato\ColissimoSdk\Type\TypeLetterCustomsDeclarations $customsDeclarations = null;

    private ?\SmartDato\ColissimoSdk\Type\TypeLetterSender $sender = null;

    private \SmartDato\ColissimoSdk\Type\TypeLetterAddressee $addressee;

    private ?\SmartDato\ColissimoSdk\Type\TypeAdresse $codSenderAddress = null;

    private ?\SmartDato\ColissimoSdk\Type\TypeLetterUploadDocument $uploadDocument = null;

    public function getService(): \SmartDato\ColissimoSdk\Type\TypeLetterService
    {
        return $this->service;
    }

    public function withService(\SmartDato\ColissimoSdk\Type\TypeLetterService $service): static
    {
        $new = clone $this;
        $new->service = $service;

        return $new;
    }

    public function getParcel(): \SmartDato\ColissimoSdk\Type\TypeLetterParcel
    {
        return $this->parcel;
    }

    public function withParcel(\SmartDato\ColissimoSdk\Type\TypeLetterParcel $parcel): static
    {
        $new = clone $this;
        $new->parcel = $parcel;

        return $new;
    }

    public function getCustomsDeclarations(): ?\SmartDato\ColissimoSdk\Type\TypeLetterCustomsDeclarations
    {
        return $this->customsDeclarations;
    }

    public function withCustomsDeclarations(?\SmartDato\ColissimoSdk\Type\TypeLetterCustomsDeclarations $customsDeclarations): static
    {
        $new = clone $this;
        $new->customsDeclarations = $customsDeclarations;

        return $new;
    }

    public function getSender(): ?\SmartDato\ColissimoSdk\Type\TypeLetterSender
    {
        return $this->sender;
    }

    public function withSender(?\SmartDato\ColissimoSdk\Type\TypeLetterSender $sender): static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }

    public function getAddressee(): \SmartDato\ColissimoSdk\Type\TypeLetterAddressee
    {
        return $this->addressee;
    }

    public function withAddressee(\SmartDato\ColissimoSdk\Type\TypeLetterAddressee $addressee): static
    {
        $new = clone $this;
        $new->addressee = $addressee;

        return $new;
    }

    public function getCodSenderAddress(): ?\SmartDato\ColissimoSdk\Type\TypeAdresse
    {
        return $this->codSenderAddress;
    }

    public function withCodSenderAddress(?\SmartDato\ColissimoSdk\Type\TypeAdresse $codSenderAddress): static
    {
        $new = clone $this;
        $new->codSenderAddress = $codSenderAddress;

        return $new;
    }

    public function getUploadDocument(): ?\SmartDato\ColissimoSdk\Type\TypeLetterUploadDocument
    {
        return $this->uploadDocument;
    }

    public function withUploadDocument(?\SmartDato\ColissimoSdk\Type\TypeLetterUploadDocument $uploadDocument): static
    {
        $new = clone $this;
        $new->uploadDocument = $uploadDocument;

        return $new;
    }
}
