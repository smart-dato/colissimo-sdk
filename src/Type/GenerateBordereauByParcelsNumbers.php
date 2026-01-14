<?php

namespace SmartDato\ColissimoSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateBordereauByParcelsNumbers implements RequestInterface
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private \SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList $generateBordereauParcelNumberList;

    private ?\SmartDato\ColissimoSdk\Type\TypeFields $fields = null;

    /**
     * Constructor
     */
    public function __construct(?string $contractNumber, ?string $password, \SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList $generateBordereauParcelNumberList, ?\SmartDato\ColissimoSdk\Type\TypeFields $fields)
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

    public function getGenerateBordereauParcelNumberList(): \SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList
    {
        return $this->generateBordereauParcelNumberList;
    }

    public function withGenerateBordereauParcelNumberList(\SmartDato\ColissimoSdk\Type\GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList $generateBordereauParcelNumberList): static
    {
        $new = clone $this;
        $new->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;

        return $new;
    }

    public function getFields(): ?\SmartDato\ColissimoSdk\Type\TypeFields
    {
        return $this->fields;
    }

    public function withFields(?\SmartDato\ColissimoSdk\Type\TypeFields $fields): static
    {
        $new = clone $this;
        $new->fields = $fields;

        return $new;
    }
}
