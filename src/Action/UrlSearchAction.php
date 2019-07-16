<?php
declare(strict_types=1);

namespace App\Action;

use App\Entity\UrlWithLinks;
use DOMDocument;

final class UrlSearchAction
{
    /**
     * @var array
     */
    private $linksarray = [];

    /**
     * @param string $url
     * @return string
     */
    public function searchUrl(string $url): string
    {
        $urlWithLinks = new UrlWithLinks();
        $html = file_get_contents("http://" . $url);
        $dom = new DOMDocument();
        @$dom->loadHTML($html);

        $links = $dom->getElementsByTagName("a");

        foreach ($links as $link){
            $this->linksarray[] = $link->getAttribute("href");
        }

        $urlWithLinks->setLinks($this->linksarray);
        $urlWithLinks->setUrl($url);

        return json_encode($urlWithLinks);
    }
}
