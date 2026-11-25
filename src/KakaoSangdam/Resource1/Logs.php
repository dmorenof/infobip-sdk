<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoSangdam\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-sangdam/1/logs [operationId: get-outbound-kakao-sangdam-message-logs] */
    /**
     * Get outbound Kakao Sangdam message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\KakaoSangdam\Resource1\Logs $params = null): \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\LogResponseLogKakaoSangdamOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoSangdam\Resource1\Logs::class)->get($params);
    }
}
