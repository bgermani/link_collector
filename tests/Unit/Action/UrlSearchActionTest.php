<?php
declare(strict_types=1);

namespace App\Tests\Unit\Action;

use App\Action\UrlSearchAction;
use PHPUnit\Framework\TestCase;

class UrlSearchActionTest extends TestCase
{
    /**
     * @var string
     */
    protected $url = "www.google.com";

    public function testItReturnsJsonWithUrlAndLinks(): void
    {
        $searchAction = new UrlSearchAction();

        $this->assertContains('"url"', $searchAction->searchUrl($this->url));
        $this->assertContains('"links"', $searchAction->searchUrl($this->url));
    }
}
