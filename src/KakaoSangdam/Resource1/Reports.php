<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoSangdam\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-sangdam/1/reports [operationId: get-outbound-kakao-sangdam-message-delivery-reports] */
    /**
     * Get Kakao Sangdam delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#sangdam-talk
     */
    public static function get(?\InfobipSDK\GetParams\KakaoSangdam\Resource1\Reports $params = null): \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoSangdam\Resource1\Reports::class)->get($params);
    }
}
