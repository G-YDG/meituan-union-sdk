<?php

declare(strict_types=1);

namespace YdgTest\MeituanSdk;

use YdgTest\AbstractTest;

/**
 * @internal
 * @coversNothing
 */
class ApiTest extends AbstractTest
{
    public function testOrderList()
    {
        $params = [
            'businessLine' => 2,
            'startTime' => time() - 86400,
            'endTime' => time(),
            'page' => 1,
            'limit' => 1,
            'queryTimeType' => 1,
        ];

        $response = $this->getApplication()->api->orderList($params);

        $this->assertArrayHasKey('dataList', $response);
        $this->assertArrayHasKey('total', $response);
    }

    public function testGnerateLink()
    {
        $params = [
            'actId' => 31,
            'sid' => 001,
            'linkType' => 1,
        ];

        $response = $this->getApplication()->api->generateLink($params);

        $this->assertArrayHasKey('status', $response);
        $this->assertEquals(0, $response['status']);
    }

    public function testMiniCode()
    {
        $params = [
            'actId' => 31,
            'sid' => 001,
            'linkType' => 4,
        ];

        $response = $this->getApplication()->api->miniCode($params);

        $this->assertArrayHasKey('status', $response);
        $this->assertEquals(0, $response['status']);
    }

    public function testMtunionPoi()
    {
        $params = [
            'businessLine' => 2,
            'longitude' => 120212010,
            'latitude' => 30208400,
            'pageNo' => 1,
            'pageSize' => 10,
        ];

        $response = $this->getApplication()->api->mtunionPoi($params);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(0, $response['code']);
    }

    public function testMtunionSku()
    {
        $params = [
            'uid' => $this->getConfig()['uid'],
            'actId' => 31,
            'businessLine' => '2',
            'pageNo' => 1,
            'pageSize' => 10,
        ];

        $response = $this->getApplication()->api->mtunionSku($params);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(0, $response['code']);
    }
}
