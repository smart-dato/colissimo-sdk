<?php

namespace SmartDato\ColissimoSdk\Type;

class GetLabelRequest
{
    private ?string $outputPrintingType = null;

    private ?string $parcelNumber = null;

    public function getOutputPrintingType(): ?string
    {
        return $this->outputPrintingType;
    }

    public function withOutputPrintingType(?string $outputPrintingType): static
    {
        $new = clone $this;
        $new->outputPrintingType = $outputPrintingType;

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
}
