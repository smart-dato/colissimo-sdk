<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterUploadDocument
{
    /**
     * @var null | mixed
     */
    private mixed $documentContent = null;

    /**
     * @return null | mixed
     */
    public function getDocumentContent(): mixed
    {
        return $this->documentContent;
    }

    /**
     * @param  null | mixed  $documentContent
     */
    public function withDocumentContent(mixed $documentContent): static
    {
        $new = clone $this;
        $new->documentContent = $documentContent;

        return $new;
    }
}
