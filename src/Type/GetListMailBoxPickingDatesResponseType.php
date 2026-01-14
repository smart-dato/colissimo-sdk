<?php

namespace SmartDato\ColissimoSdk\Type;

class GetListMailBoxPickingDatesResponseType extends BaseResponse
{
    private ?string $mailBoxPickingDateMaxHour = null;

    /**
     * @var null | array<int<0,max>, \DateTimeInterface>
     */
    private ?array $mailBoxPickingDates = null;

    private ?string $validityTime = null;

    public function getMailBoxPickingDateMaxHour(): ?string
    {
        return $this->mailBoxPickingDateMaxHour;
    }

    public function withMailBoxPickingDateMaxHour(?string $mailBoxPickingDateMaxHour): static
    {
        $new = clone $this;
        $new->mailBoxPickingDateMaxHour = $mailBoxPickingDateMaxHour;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, \DateTimeInterface>
     */
    public function getMailBoxPickingDates(): ?array
    {
        return $this->mailBoxPickingDates;
    }

    /**
     * @param  null | array<int<0,max>, \DateTimeInterface>  $mailBoxPickingDates
     */
    public function withMailBoxPickingDates(?array $mailBoxPickingDates): static
    {
        $new = clone $this;
        $new->mailBoxPickingDates = $mailBoxPickingDates;

        return $new;
    }

    public function getValidityTime(): ?string
    {
        return $this->validityTime;
    }

    public function withValidityTime(?string $validityTime): static
    {
        $new = clone $this;
        $new->validityTime = $validityTime;

        return $new;
    }
}
