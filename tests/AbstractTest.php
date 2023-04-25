<?php

declare(strict_types=1);

namespace YdgTest;

use PHPUnit\Framework\TestCase;
use Ydg\MeituanUnionSdk\Meituan;

abstract class AbstractTest extends TestCase
{
    public function getApplication(): Meituan
    {
        return new Meituan($this->getConfig());
    }

    public function getConfig(): array
    {
        return [
            'uid' => 'your uid',
            'appkey' => 'your appkey',
            'sign_secret' => 'your sign_secret',
        ];
    }
}
