<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1\Calls\ByCallId;

final class History extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/calls/1/calls/{callId}/history',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\\CallLog',
    ];

    /**
     * Get call history
     *
     * Get a single call history. Call history retention period is 5 days.
     */
    public function get(string $callId): \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\CallLog
    {
        /** @var \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\CallLog $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['callId' => $callId]);
        return $result;
    }

}
