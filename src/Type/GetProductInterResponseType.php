<?php

namespace SmartDato\ColissimoSdk\Type;

class GetProductInterResponseType extends BaseResponse
{
    /**
     * @var null | array<int<0,max>, string>
     */
    private ?array $product = null;

    private ?string $partnerType = null;

    /**
     * @var null | array<int<0,max>, string>
     */
    private ?array $returnTypeChoice = null;

    /**
     * @return null | array<int<0,max>, string>
     */
    public function getProduct(): ?array
    {
        return $this->product;
    }

    /**
     * @param  null | array<int<0,max>, string>  $product
     */
    public function withProduct(?array $product): static
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getPartnerType(): ?string
    {
        return $this->partnerType;
    }

    public function withPartnerType(?string $partnerType): static
    {
        $new = clone $this;
        $new->partnerType = $partnerType;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, string>
     */
    public function getReturnTypeChoice(): ?array
    {
        return $this->returnTypeChoice;
    }

    /**
     * @param  null | array<int<0,max>, string>  $returnTypeChoice
     */
    public function withReturnTypeChoice(?array $returnTypeChoice): static
    {
        $new = clone $this;
        $new->returnTypeChoice = $returnTypeChoice;

        return $new;
    }
}
