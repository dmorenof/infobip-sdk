<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource3;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/3/reports',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\\DeliveryReports',
    ];

    /**
     * Get outbound SMS message delivery reports
     *
     * If you are unable to receive real-time message delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of message reports to confirm whether specific messages have been delivered. Each request towards this endpoint returns batches of the latest message reports. The API returns each report only once. If the message status changes again after retrieval, the endpoint returns a new report for the updated status on the next request.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function get(?\InfobipSDK\GetParams\Sms\Resource3\Reports $params = null): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryReports
    {
        /** @var \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\DeliveryReports $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
