<?php

namespace SmartDato\ColissimoSdk\Type;

class TypeLetterContents
{
    /**
     * @var null | array<int<0,max>, TypeLetterArticle>
     */
    private ?array $article = null;

    private ?TypeLetterCategory $category = null;

    /**
     * @var null | array<int<0,max>, TypeLetterOriginal>
     */
    private ?array $original = null;

    private ?string $explanations = null;

    /**
     * @return null | array<int<0,max>, TypeLetterArticle>
     */
    public function getArticle(): ?array
    {
        return $this->article;
    }

    /**
     * @param  null | array<int<0,max>, TypeLetterArticle>  $article
     */
    public function withArticle(?array $article): static
    {
        $new = clone $this;
        $new->article = $article;

        return $new;
    }

    public function getCategory(): ?TypeLetterCategory
    {
        return $this->category;
    }

    public function withCategory(?TypeLetterCategory $category): static
    {
        $new = clone $this;
        $new->category = $category;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, TypeLetterOriginal>
     */
    public function getOriginal(): ?array
    {
        return $this->original;
    }

    /**
     * @param  null | array<int<0,max>, TypeLetterOriginal>  $original
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
