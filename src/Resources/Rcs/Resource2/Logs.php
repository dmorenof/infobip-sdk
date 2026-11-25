<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Rcs\Resource2;

final class Logs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/rcs/2/logs',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\\LogResponseLogRcsOutboundMessageContent',
        'querySerialization' => [
            'bulkId' => 'multi',
            'campaignReferenceId' => 'multi',
            'messageId' => 'multi',
        ],
    ];

    /**
     * Get RCS message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public function get(?\InfobipSDK\GetParams\Rcs\Resource2\Logs $params = null): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\LogResponseLogRcsOutboundMessageContent
    {
        /** @var \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\LogResponseLogRcsOutboundMessageContent $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
