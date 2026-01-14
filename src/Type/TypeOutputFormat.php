<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeOutputFormat
{
    private ?int $x = null;

    private ?int $y = null;

    private ?string $outputPrintingType = null;

    private ?bool $dematerialized = null;

    private ?string $returnType = null;

    private ?bool $printCODDocument = null;

    public function getX(): ?int
    {
        return $this->x;
    }

    public function withX(?int $x): static
    {
        $new = clone $this;
        $new->x = $x;

        return $new;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function withY(?int $y): static
    {
        $new = clone $this;
        $new->y = $y;

        return $new;
    }

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

    public function getDematerialized(): ?bool
    {
        return $this->dematerialized;
    }

    public function withDematerialized(?bool $dematerialized): static
    {
        $new = clone $this;
        $new->dematerialized = $dematerialized;

        return $new;
    }

    public function getReturnType(): ?string
    {
        return $this->returnType;
    }

    public function withReturnType(?string $returnType): static
    {
        $new = clone $this;
        $new->returnType = $returnType;

        return $new;
    }

    public function getPrintCODDocument(): ?bool
    {
        return $this->printCODDocument;
    }

    public function withPrintCODDocument(?bool $printCODDocument): static
    {
        $new = clone $this;
        $new->printCODDocument = $printCODDocument;

        return $new;
    }
}
