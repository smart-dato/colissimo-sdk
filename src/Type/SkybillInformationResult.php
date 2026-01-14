<?php

namespace SmartDato\ColissimoSdk\Type;

class SkybillInformationResult
{
    private int $errorCode;

    private ?string $errorMessage = null;

    private ?string $eventCode = null;

    private ?\DateTimeInterface $eventDate = null;

    private ?string $eventLibelle = null;

    private ?string $eventSite = null;

    private ?string $recipientCity = null;

    private ?string $recipientCountryCode = null;

    private ?string $recipientZipCode = null;

    private ?string $skybillNumber = null;

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function withErrorCode(int $errorCode): static
    {
        $new = clone $this;
        $new->errorCode = $errorCode;

        return $new;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function withErrorMessage(?string $errorMessage): static
    {
        $new = clone $this;
        $new->errorMessage = $errorMessage;

        return $new;
    }

    public function getEventCode(): ?string
    {
        return $this->eventCode;
    }

    public function withEventCode(?string $eventCode): static
    {
        $new = clone $this;
        $new->eventCode = $eventCode;

        return $new;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->eventDate;
    }

    public function withEventDate(?\DateTimeInterface $eventDate): static
    {
        $new = clone $this;
        $new->eventDate = $eventDate;

        return $new;
    }

    public function getEventLibelle(): ?string
    {
        return $this->eventLibelle;
    }

    public function withEventLibelle(?string $eventLibelle): static
    {
        $new = clone $this;
        $new->eventLibelle = $eventLibelle;

        return $new;
    }

    public function getEventSite(): ?string
    {
        return $this->eventSite;
    }

    public function withEventSite(?string $eventSite): static
    {
        $new = clone $this;
        $new->eventSite = $eventSite;

        return $new;
    }

    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }

    public function withRecipientCity(?string $recipientCity): static
    {
        $new = clone $this;
        $new->recipientCity = $recipientCity;

        return $new;
    }

    public function getRecipientCountryCode(): ?string
    {
        return $this->recipientCountryCode;
    }

    public function withRecipientCountryCode(?string $recipientCountryCode): static
    {
        $new = clone $this;
        $new->recipientCountryCode = $recipientCountryCode;

        return $new;
    }

    public function getRecipientZipCode(): ?string
    {
        return $this->recipientZipCode;
    }

    public function withRecipientZipCode(?string $recipientZipCode): static
    {
        $new = clone $this;
        $new->recipientZipCode = $recipientZipCode;

        return $new;
    }

    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }

    public function withSkybillNumber(?string $skybillNumber): static
    {
        $new = clone $this;
        $new->skybillNumber = $skybillNumber;

        return $new;
    }
}
