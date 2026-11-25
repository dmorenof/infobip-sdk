<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/1/reports [operationId: get-outbound-sms-message-delivery-reports] */
    /**
     * Get outbound SMS message delivery reports
     *
     * If you are for any reason unable to receive real-time delivery reports on your endpoint, you can use this API method to learn if and when the message has been delivered to the recipient. Each request will return a batch of delivery reports - only once. The following API request will return only new reports that arrived since the last API request in the last 48 hours.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function get(?\InfobipSDK\GetParams\Sms\Resource1\Reports $params = null): \InfobipSDK\DTOs\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223\SMSReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Reports::class)->get($params);
    }

}
