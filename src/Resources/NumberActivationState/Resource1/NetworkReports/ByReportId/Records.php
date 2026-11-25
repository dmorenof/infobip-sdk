<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberActivationState\Resource1\NetworkReports\ByReportId;

final class Records extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/number-activation-state/1/network-reports/{reportId}/records',
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
            404 => '\\InfobipSDK\\Responses\\Errors\\Status404Variant2Response',
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
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status404Variant2Response',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\\PageReports',
    ];

    /**
     * Get Network Report content
     *
     * Get a paginated list of destination number activation state changes from a given Report.
     */
    public function get(string $reportId, ?\InfobipSDK\GetParams\NumberActivationState\Resource1\NetworkReports\ByReportId\Records $params = null): \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReports
    {
        /** @var \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReports $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['reportId' => $reportId], parameters: $params);
        return $result;
    }

}
