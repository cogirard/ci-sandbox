<?php

namespace App\Factory;

use App\Entity\Band;
use App\Repository\BandRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Band>
 *
 * @method        Band|Proxy                     create(array|callable $attributes = [])
 * @method static Band|Proxy                     createOne(array $attributes = [])
 * @method static Band|Proxy                     find(object|array|mixed $criteria)
 * @method static Band|Proxy                     findOrCreate(array $attributes)
 * @method static Band|Proxy                     first(string $sortedField = 'id')
 * @method static Band|Proxy                     last(string $sortedField = 'id')
 * @method static Band|Proxy                     random(array $attributes = [])
 * @method static Band|Proxy                     randomOrCreate(array $attributes = [])
 * @method static BandRepository|RepositoryProxy repository()
 * @method static Band[]|Proxy[]                 all()
 * @method static Band[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Band[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Band[]|Proxy[]                 findBy(array $attributes)
 * @method static Band[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Band[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class BandFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'country' => self::faker()->country(),
            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'name' => self::faker()->company(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Band $band): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Band::class;
    }
}
