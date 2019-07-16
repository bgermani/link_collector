<?php
declare(strict_types=1);

namespace App\Entity;

use JsonSerializable;

final class UrlWithLinks implements JsonSerializable
{
    /** @var string */
    private $url;

    /** @var array */
    private $links = [];

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     */
    public function setLinks(array $links): void
    {
        $this->links = $links;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            "url" => $this->url,
            "links" => $this->links,
        ];
    }
}
