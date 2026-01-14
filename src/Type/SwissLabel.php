<?php

namespace SmartDato\ColissimoSdk\Type;

class SwissLabel
{
    private ?string $injectionSite = null;

    private ?bool $signatureOption = null;

    private ?string $codeSwissPost = null;

    private ?string $swissParcelNumber = null;

    public function getInjectionSite(): ?string
    {
        return $this->injectionSite;
    }

    public function withInjectionSite(?string $injectionSite): static
    {
        $new = clone $this;
        $new->injectionSite = $injectionSite;

        return $new;
    }

    public function getSignatureOption(): ?bool
    {
        return $this->signatureOption;
    }

    public function withSignatureOption(?bool $signatureOption): static
    {
        $new = clone $this;
        $new->signatureOption = $signatureOption;

        return $new;
    }

    public function getCodeSwissPost(): ?string
    {
        return $this->codeSwissPost;
    }

    public function withCodeSwissPost(?string $codeSwissPost): static
    {
        $new = clone $this;
        $new->codeSwissPost = $codeSwissPost;

        return $new;
    }

    public function getSwissParcelNumber(): ?string
    {
        return $this->swissParcelNumber;
    }

    public function withSwissParcelNumber(?string $swissParcelNumber): static
    {
        $new = clone $this;
        $new->swissParcelNumber = $swissParcelNumber;

        return $new;
    }
}
