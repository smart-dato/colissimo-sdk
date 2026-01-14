<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBordereauByNumber implements RequestInterface
{
    private string $contractNumber;

    private string $password;

    private string $bordereauNumber;

    /**
     * Constructor
     */
    public function __construct(string $contractNumber, string $password, string $bordereauNumber)
    {
        $this->contractNumber = $contractNumber;
        $this->password = $password;
        $this->bordereauNumber = $bordereauNumber;
    }

    public function getContractNumber(): string
    {
        return $this->contractNumber;
    }

    public function withContractNumber(string $contractNumber): static
    {
        $new = clone $this;
        $new->contractNumber = $contractNumber;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getBordereauNumber(): string
    {
        return $this->bordereauNumber;
    }

    public function withBordereauNumber(string $bordereauNumber): static
    {
        $new = clone $this;
        $new->bordereauNumber = $bordereauNumber;

        return $new;
    }
}
