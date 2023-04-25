<?php

declare(strict_types=1);

namespace Ydg\MeituanUnionSdk\Api;

use Ydg\MeituanUnionSdk\MeituanClient;

class Client extends MeituanClient
{
    /**
     * 订单列表查询接口 （https://union.meituan.com/v2/apiDetail?id=23）.
     * @param mixed $params
     */
    public function orderList($params): array
    {
        return $this->get('api/orderList', $params);
    }

    /**
     * 单订单查询接口 （https://union.meituan.com/v2/apiDetail?id=24）.
     * @param mixed $params
     */
    public function order($params): array
    {
        return $this->get('api/order', $params);
    }

    /**
     * 自助取链接口 （https://union.meituan.com/v2/apiDetail?id=25）.
     * @param mixed $params
     */
    public function generateLink($params): array
    {
        return $this->get('api/generateLink', $params);
    }

    /**
     * 小程序生成二维码 （https://union.meituan.com/v2/apiDetail?id=26）.
     * @param mixed $params
     */
    public function miniCode($params): array
    {
        return $this->get('api/miniCode', $params);
    }

    /**
     * 门店POI查询 （https://union.meituan.com/v2/apiDetail?id=32）.
     * @param mixed $params
     */
    public function mtunionPoi($params): array
    {
        return $this->get('api/mtunion/poi', $params);
    }

    /**
     * 券包商品查询接口 （https://union.meituan.com/v2/apiDetail?id=33）.
     * @param mixed $params
     */
    public function mtunionSku($params): array
    {
        return $this->get('api/mtunion/sku', $params);
    }
}
