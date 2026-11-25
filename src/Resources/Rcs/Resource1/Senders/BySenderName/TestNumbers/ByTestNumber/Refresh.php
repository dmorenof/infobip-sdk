<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber;

final class Refresh extends \InfobipSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/rcs/1/senders/{senderName}/test-numbers/{testNumber}/refresh',
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
        'success' => [
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            409 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            409 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\\RcsTestNumberRequestAcceptedResponse',
    ];

    /**
     * Refresh RCS test number
     *
     * Status of RCS test number is automatically refreshed for 24 hours after it was added. If user does not accept invitation to become a tester in that period, test number will be marked as EXPIRED. Use this endpoint in order to start new 24 hours cycle in which system will periodically check if user has accepted to become a tester.
     */
    public function put(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber\Refresh $identifier): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberRequestAcceptedResponse
    {
        /** @var \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberRequestAcceptedResponse $result */
        $result = $this->executeArguments(self::operation(self::PUT), path: $identifier);
        return $result;
    }
}
