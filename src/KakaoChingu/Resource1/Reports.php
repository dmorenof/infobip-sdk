<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoChingu\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-chingu/1/reports [operationId: get-outbound-kakao-chingu-message-delivery-reports] */
    /**
     * Get brand message delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#chingu-talk
     */
    public static function get(?\InfobipSDK\GetParams\KakaoChingu\Resource1\Reports $params = null): \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoChingu\Resource1\Reports::class)->get($params);
    }

}
