<?php

namespace Nitsan\MySitePackage\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News
{
    protected string $subtitle = '';
    protected string $descriptionNews = '';

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    public function getDescriptionNews(): string
    {
        return $this->descriptionNews;
    }

    public function setDescriptionNews(string $descriptionNews): void
    {
        $this->descriptionNews = $descriptionNews;
    }
}