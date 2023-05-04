<?php

namespace Unit;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = self::createClient();

        $client->request(
            Request::METHOD_GET,
            '/',
        );

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        $response = $client->getResponse();

        $this->assertJson($response->getContent());

        $jsonData = json_decode($response->getContent(), true);

        $this->assertIsArray($jsonData);

        $this->assertArrayHasKey('message', $jsonData);
        $this->assertArrayHasKey('content', $jsonData);

        $this->assertEquals('chaussette', $jsonData['message']);
        $this->assertEquals('toto', $jsonData['content']['brand']);
        $this->assertEquals('yellow', $jsonData['content']['color']);
    }
}
