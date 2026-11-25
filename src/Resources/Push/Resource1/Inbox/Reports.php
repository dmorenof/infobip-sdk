<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Push\Resource1\Inbox;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/push/1/inbox/reports',
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
            400 => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N18a8b746d2b3a8fcfed338bade07f6facb992e3867826d141a0e0ae5a3ba5642\\ApiException',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\\MoReportsResponse',
    ];

    /**
     * Receive MO Push messages
     *
     * Get MO (Mobile Originated) Push messages that have been received by the Infobip platform from your subscribers' devices. These are incoming messages sent from devices to your application, not messages sent from the platform to devices. Each request will return a batch of received messages - only once. The following request will return the next batch of messages.
     */
    public function get(?\InfobipSDK\GetParams\Push\Resource1\Inbox\Reports $params = null): \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\MoReportsResponse
    {
        /** @var \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\MoReportsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
