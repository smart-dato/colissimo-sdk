<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateBordereauByParcelsNumbersGenerateBordereauParcelNumberList
{
    /**
     * @var non-empty-array<int<0,max>, string>
     */
    private array $parcelsNumbers;

    /**
     * @return non-empty-array<int<0,max>, string>
     */
    public function getParcelsNumbers(): array
    {
        return $this->parcelsNumbers;
    }

    /**
     * @param  non-empty-array<int<0,max>, string>  $parcelsNumbers
     */
    public function withParcelsNumbers(array $parcelsNumbers): static
    {
        $new = clone $this;
        $new->parcelsNumbers = $parcelsNumbers;

        return $new;
    }
}
