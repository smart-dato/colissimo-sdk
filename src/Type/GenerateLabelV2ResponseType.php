<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateLabelV2ResponseType extends BaseResponse
{
    private ?XmlV2Response $labelXmlV2Reponse = null;

    private ?LabelV2Response $labelV2Response = null;

    public function getLabelXmlV2Reponse(): ?XmlV2Response
    {
        return $this->labelXmlV2Reponse;
    }

    public function withLabelXmlV2Reponse(?XmlV2Response $labelXmlV2Reponse): static
    {
        $new = clone $this;
        $new->labelXmlV2Reponse = $labelXmlV2Reponse;

        return $new;
    }

    public function getLabelV2Response(): ?LabelV2Response
    {
        return $this->labelV2Response;
    }

    public function withLabelV2Response(?LabelV2Response $labelV2Response): static
    {
        $new = clone $this;
        $new->labelV2Response = $labelV2Response;

        return $new;
    }
}
