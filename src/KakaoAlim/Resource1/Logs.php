<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoAlim\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-alim/1/logs [operationId: get-outbound-kakao-alim-message-logs] */
    /**
     * Get outbound Kakao Alim message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\KakaoAlim\Resource1\Logs $params = null): \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\LogResponseLogKakaoAlimOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoAlim\Resource1\Logs::class)->get($params);
    }
}
