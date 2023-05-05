<?php

namespace App\DataFixtures;

use App\Factory\BandFactory;
use App\Factory\MemberFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        BandFactory::createMany(150);

        MemberFactory::createMany(600, function () {
            return [
                'band' => BandFactory::random(),
            ];
        });
    }
}
