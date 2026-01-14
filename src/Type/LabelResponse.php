<?php

namespace SmartDato\ColissimoSdk\Type;

class LabelResponse
{
    /**
     * @var null | mixed
     */
    private mixed $label = null;

    /**
     * @var null | mixed
     */
    private mixed $cn23 = null;

    private ?string $parcelNumber = null;

    private ?string $parcelNumberPartner = null;

    private ?string $pdfUrl = null;

    /**
     * @return null | mixed
     */
    public function getLabel(): mixed
    {
        return $this->label;
    }

    /**
     * @param  null | mixed  $label
     */
    public function withLabel(mixed $label): static
    {
        $new = clone $this;
        $new->label = $label;

        return $new;
    }

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

    public function getPdfUrl(): ?string
    {
        return $this->pdfUrl;
    }

    public function withPdfUrl(?string $pdfUrl): static
    {
        $new = clone $this;
        $new->pdfUrl = $pdfUrl;

        return $new;
    }
}
