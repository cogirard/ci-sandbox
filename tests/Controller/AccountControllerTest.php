<?php

namespace Controller;

use App\Factory\UserFactory;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class AccountControllerTest extends WebTestCase
{
    public function testMyAccountPageIsRestricted(): void
    {
        $client = self::createClient();

        $client->request(
            Request::METHOD_GET,
            '/account'
        );

        $this->assertResponseRedirects('/login');
    }

    public function testMyAccountPageIsAccessibleForUser(): void
    {
        $client = self::createClient();

        /** @var UserInterface $testUser */
        $testUser = UserFactory::createOne()->object();

        $client->loginUser($testUser);

        $client->request(
            Request::METHOD_GET,
            '/account'
        );

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('p', sprintf('Logged in as %s', $testUser->getUserIdentifier()));
    }

    public function testMyAccountPageIsAccessibleForAdmin(): void
    {
        $client = self::createClient();

        /** @var UserInterface $testUser */
        $testUser = UserFactory::createOne([
            'roles' => ['ROLE_ADMIN'],
        ])->object();

        $client->loginUser($testUser);

        $client->request(
            Request::METHOD_GET,
            '/account'
        );

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('p', sprintf('Logged in as %s', $testUser->getUserIdentifier()));
    }
}
