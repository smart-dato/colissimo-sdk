<?php

namespace SmartDato\ColissimoSdk\Type;

class GenerateLabelV2ResponseType extends BaseResponse
{
    private ?\SmartDato\ColissimoSdk\Type\XmlV2Response $labelXmlV2Reponse = null;

    private ?\SmartDato\ColissimoSdk\Type\LabelV2Response $labelV2Response = null;

    public function getLabelXmlV2Reponse(): ?\SmartDato\ColissimoSdk\Type\XmlV2Response
    {
        return $this->labelXmlV2Reponse;
    }

    public function withLabelXmlV2Reponse(?\SmartDato\ColissimoSdk\Type\XmlV2Response $labelXmlV2Reponse): static
    {
        $new = clone $this;
        $new->labelXmlV2Reponse = $labelXmlV2Reponse;

        return $new;
    }

    public function getLabelV2Response(): ?\SmartDato\ColissimoSdk\Type\LabelV2Response
    {
        return $this->labelV2Response;
    }

    public function withLabelV2Response(?\SmartDato\ColissimoSdk\Type\LabelV2Response $labelV2Response): static
    {
        $new = clone $this;
        $new->labelV2Response = $labelV2Response;

        return $new;
    }
}
