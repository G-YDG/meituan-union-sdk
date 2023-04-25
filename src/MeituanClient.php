<?php

declare(strict_types=1);

namespace Ydg\MeituanUnionSdk;

use GuzzleHttp\Exception\GuzzleException;
use Ydg\FoudationSdk\FoundationApi;
use Ydg\FoudationSdk\Traits\HasAttributes;
use Ydg\MeituanUnionSdk\Support\Utils;

class MeituanClient extends FoundationApi
{
    use HasAttributes;

    public function __construct(array $attributes)
    {
        if (! isset($attributes['base_uri'])) {
            $attributes['base_uri'] = 'https://openapi.meituan.com/';
        }
        $this->attributes = $attributes;
    }

    /**
     * @param mixed $uri
     * @param mixed $params
     * @throws GuzzleException
     */
    public function get($uri, $params): array
    {
        $config = $this->toArray();

        $params['appkey'] = $config['appkey'] ?? '';
        $params['ts'] = time();

        $params['sign'] = $this->makeSign($params, $config['sign_secret'] ?? '');

        $response = $this->getHttpClient()->get($this->offsetGet('base_uri') . $uri, $params);

        return Utils::jsonResponseToArray($response);
    }

    public function getHttpClientDefaultOptions(): array
    {
        return [
            'verify' => false,
        ];
    }

    protected function makeSign($params, $sign_secret): string
    {
        unset($params['sign']);
        ksort($params);
        $str = '';
        foreach ($params as $key => $value) {
            $str .= $key . $value;
        }
        return md5($sign_secret . $str . $sign_secret);
    }
}
