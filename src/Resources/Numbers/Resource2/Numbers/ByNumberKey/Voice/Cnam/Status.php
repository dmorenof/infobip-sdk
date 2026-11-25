<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam;

final class Status extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/numbers/2/numbers/{numberKey}/voice/cnam/status',
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
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Bc185b494ef7059aff9d68589cd5338df2245f21add51cf1a96e9927af6e30d7\\PublicCnamStatus',
    ];

    /**
     * Get CNAM status
     *
     * Get a CNAM configuration status.
     */
    public function get(string $numberKey): \InfobipSDK\DTOs\Bc185b494ef7059aff9d68589cd5338df2245f21add51cf1a96e9927af6e30d7\PublicCnamStatus
    {
        /** @var \InfobipSDK\DTOs\Bc185b494ef7059aff9d68589cd5338df2245f21add51cf1a96e9927af6e30d7\PublicCnamStatus $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['numberKey' => $numberKey]);
        return $result;
    }
}
