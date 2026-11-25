<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource1;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/1/reports',
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
            400 => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N578c889dd8f68587bd351066c5c6572a98ea0c15c65b5cacb8779be90fbfbb70\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223\\SMSReportResponse',
    ];

    /**
     * Get outbound SMS message delivery reports
     *
     * If you are for any reason unable to receive real-time delivery reports on your endpoint, you can use this API method to learn if and when the message has been delivered to the recipient. Each request will return a batch of delivery reports - only once. The following API request will return only new reports that arrived since the last API request in the last 48 hours.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function get(?\InfobipSDK\GetParams\Sms\Resource1\Reports $params = null): \InfobipSDK\DTOs\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223\SMSReportResponse
    {
        /** @var \InfobipSDK\DTOs\N1705572441d20bbbfe49765ca2bed87cd314f9c5c501048d5a9494385ff9f223\SMSReportResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
