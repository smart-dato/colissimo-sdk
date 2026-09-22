<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateBordereauByParcelsNumbers implements RequestInterface
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList $generateBordereauParcelNumberList;

    private ?TypeFields $fields = null;

    /**
     * Constructor
     */
    public function __construct(?string $contractNumber, ?string $password, GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList $generateBordereauParcelNumberList, ?TypeFields $fields)
    {
        $this->contractNumber = $contractNumber;
        $this->password = $password;
        $this->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;
        $this->fields = $fields;
    }

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

    public function getGenerateBordereauParcelNumberList(): GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList
    {
        return $this->generateBordereauParcelNumberList;
    }

    public function withGenerateBordereauParcelNumberList(GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList $generateBordereauParcelNumberList): static
    {
        $new = clone $this;
        $new->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;

        return $new;
    }

    public function getFields(): ?TypeFields
    {
        return $this->fields;
    }

    public function withFields(?TypeFields $fields): static
    {
        $new = clone $this;
        $new->fields = $fields;

        return $new;
    }
}
