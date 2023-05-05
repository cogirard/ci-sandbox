<?php

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    public function testIndexPageIsResponding(): void
    {
        $client = self::createClient();

        $client->request(
            Request::METHOD_GET,
            '/index'
        );

        $this->assertResponseIsSuccessful();
    }

    public function testIndexPageIsInaccessibleThroughMethodPost(): void
    {
        $client = self::createClient();

        $client->request(
            Request::METHOD_POST,
            '/index'
        );

        $this->assertResponseStatusCodeSame(Response::HTTP_METHOD_NOT_ALLOWED);
    }
}
