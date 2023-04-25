# meituan-union-sdk

union.meituan.com

Install the latest version with

```bash
$ composer require ydg/meituan-union-sdk"
```

```php
<?php

use Ydg\MeituanUnionSdk\Meituan;

$app = new Meituan([
    'uid' => 'your uid',
    'appkey' => 'your appkey',
    'sign_secret' => 'your sign_secret',
]);
$app->api->orderList([
    'businessLine' => 2,
    'startTime' => time() - 86400,
    'endTime' => time(),
    'page' => 1,
    'limit' => 1,
    'queryTimeType' => 1,
]);
```
