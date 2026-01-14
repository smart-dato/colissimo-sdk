<?php

namespace SmartDato\ColissimoSdk\Type;

class PlanPickupRequest
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private string $parcelNumber;

    private ?\DateTimeInterface $mailBoxPickingDate = null;

    private \SmartDato\ColissimoSdk\Type\TypePlanPickupSender $sender;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function withPassword(?string $password): static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getParcelNumber(): string
    {
        return $this->parcelNumber;
    }

    public function withParcelNumber(string $parcelNumber): static
    {
        $new = clone $this;
        $new->parcelNumber = $parcelNumber;

        return $new;
    }

    public function getMailBoxPickingDate(): ?\DateTimeInterface
    {
        return $this->mailBoxPickingDate;
    }

    public function withMailBoxPickingDate(?\DateTimeInterface $mailBoxPickingDate): static
    {
        $new = clone $this;
        $new->mailBoxPickingDate = $mailBoxPickingDate;

        return $new;
    }

    public function getSender(): \SmartDato\ColissimoSdk\Type\TypePlanPickupSender
    {
        return $this->sender;
    }

    public function withSender(\SmartDato\ColissimoSdk\Type\TypePlanPickupSender $sender): static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }
}
