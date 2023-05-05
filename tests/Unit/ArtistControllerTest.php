<?php

namespace Unit;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArtistControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = self::createClient();

        $client->request(
            Request::METHOD_GET,
            '/artists/list'
        );

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
