<?php
declare(strict_types=1);

namespace App\Tests\Unit\Controller;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;


class PostUrlControllerTest extends TestCase
{
    protected $client;
    protected $url = "/posturl/www.google.com";
    protected $localhost = "http://127.0.0.1:8000";

    protected function setUp(): void
    {
        $this->client = new Client([
            "base_uri" => $this->localhost
        ]);
    }

    public function testPost(): void
    {
        $response = $this->client->post($this->url);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
