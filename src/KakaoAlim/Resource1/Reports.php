<?php

declare(strict_types=1);

namespace InfobipSDK\KakaoAlim\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /kakao-alim/1/reports [operationId: get-outbound-kakao-alim-message-delivery-reports] */
    /**
     * Get Kakao Alim delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/kakaotalk/message-types#alim-talk
     */
    public static function get(?\InfobipSDK\GetParams\KakaoAlim\Resource1\Reports $params = null): \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\KakaoAlim\Resource1\Reports::class)->get($params);
    }

}
