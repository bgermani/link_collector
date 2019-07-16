<?php
declare(strict_types=1);

namespace App\Controller;

use App\Action\UrlSearchAction;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class PostUrlController
{
    /**
     * @Route("/posturl/{url}")
     * @param string $url
     * @return JsonResponse
     */
    public function postUrl(string $url): JsonResponse
    {
        $urlWithLinks = new UrlSearchAction();

        return new JsonResponse(
            json_decode($urlWithLinks->searchUrl($url))
        );
    }
}
