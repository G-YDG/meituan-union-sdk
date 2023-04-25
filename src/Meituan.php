<?php

declare(strict_types=1);

namespace Ydg\MeituanUnionSdk;

use Ydg\FoudationSdk\ServiceContainer;

/**
 * @property Api\Client $api
 */
class Meituan extends ServiceContainer
{
    protected $providers = [
        Api\ServiceProvider::class,
    ];
}
