<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoChingu\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-chingu/1/logs [operationId: get-outbound-kakao-chingu-message-logs] */
    /**
     * Get message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\KakaoChingu\Resource1\Logs $params = null): \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\LogResponseLogKakaoChinguOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoChingu\Resource1\Logs::class)->get($params);
    }

}
