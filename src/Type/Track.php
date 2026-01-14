<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Track implements RequestInterface
{
    private ?string $accountNumber = null;

    private ?string $password = null;

    private ?string $skybillNumber = null;

    private ?string $apiKey = null;

    /**
     * Constructor
     */
    public function __construct(?string $accountNumber, ?string $password, ?string $skybillNumber, ?string $apiKey)
    {
        $this->accountNumber = $accountNumber;
        $this->password = $password;
        $this->skybillNumber = $skybillNumber;
        $this->apiKey = $apiKey;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function withAccountNumber(?string $accountNumber): static
    {
        $new = clone $this;
        $new->accountNumber = $accountNumber;

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

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function withApiKey(?string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }
}
