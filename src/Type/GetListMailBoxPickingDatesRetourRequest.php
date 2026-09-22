<?php

namespace SmartDato\ColissimoSdk\Type;

class GetListMailBoxPickingDatesRetourRequest
{
    private ?string $contractNumber = null;

    private ?string $password = null;

    private GetListMailBoxPickingDatesRetourRequestSender $sender;

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

    public function getSender(): GetListMailBoxPickingDatesRetourRequestSender
    {
        return $this->sender;
    }

    public function withSender(GetListMailBoxPickingDatesRetourRequestSender $sender): static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }
}
