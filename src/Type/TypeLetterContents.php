<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterContents
{
    /**
     * @var null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeLetterArticle>
     */
    private ?array $article = null;

    private ?\SmartDato\ColissimoSdk\Type\TypeLetterCategory $category = null;

    /**
     * @var null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeLetterOriginal>
     */
    private ?array $original = null;

    private ?string $explanations = null;

    /**
     * @return null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeLetterArticle>
     */
    public function getArticle(): ?array
    {
        return $this->article;
    }

    /**
     * @param  null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeLetterArticle>  $article
     */
    public function withArticle(?array $article): static
    {
        $new = clone $this;
        $new->article = $article;

        return $new;
    }

    public function getCategory(): ?\SmartDato\ColissimoSdk\Type\TypeLetterCategory
    {
        return $this->category;
    }

    public function withCategory(?\SmartDato\ColissimoSdk\Type\TypeLetterCategory $category): static
    {
        $new = clone $this;
        $new->category = $category;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeLetterOriginal>
     */
    public function getOriginal(): ?array
    {
        return $this->original;
    }

    /**
     * @param  null | array<int<0,max>, \SmartDato\ColissimoSdk\Type\TypeLetterOriginal>  $original
     */
    public function withOriginal(?array $original): static
    {
        $new = clone $this;
        $new->original = $original;

        return $new;
    }

    public function getExplanations(): ?string
    {
        return $this->explanations;
    }

    public function withExplanations(?string $explanations): static
    {
        $new = clone $this;
        $new->explanations = $explanations;

        return $new;
    }
}
