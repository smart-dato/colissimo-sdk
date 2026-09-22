<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateCN23 implements RequestInterface
{
    private ?GenerateCN23GenerateCN23Request $generateCN23Request = null;

    /**
     * Constructor
     */
    public function __construct(?GenerateCN23GenerateCN23Request $generateCN23Request)
    {
        $this->generateCN23Request = $generateCN23Request;
    }

    public function getGenerateCN23Request(): ?GenerateCN23GenerateCN23Request
    {
        return $this->generateCN23Request;
    }

    public function withGenerateCN23Request(?GenerateCN23GenerateCN23Request $generateCN23Request): static
    {
        $new = clone $this;
        $new->generateCN23Request = $generateCN23Request;

        return $new;
    }
}
