<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateTokenV2ResponseType extends BaseResponse
{
    private ?TokenV2Response $tokenV2Response = null;

    public function getTokenV2Response(): ?TokenV2Response
    {
        return $this->tokenV2Response;
    }

    public function withTokenV2Response(?TokenV2Response $tokenV2Response): static
    {
        $new = clone $this;
        $new->tokenV2Response = $tokenV2Response;

        return $new;
    }
}
