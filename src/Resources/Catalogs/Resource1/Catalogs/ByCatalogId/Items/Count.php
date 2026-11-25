<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items;

final class Count extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/catalogs/1/catalogs/{catalogId}/items/count',
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
            400 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N8107508a6b6ebe39d7ea5cd4a2338a61e45bf1b939b4ec9bc51846ab35de14ea\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\\CountResponse',
    ];

    /**
     * Get item count
     *
     * Use this method to get the total number of items in a specific catalog.
     */
    public function get(int $catalogId): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        /** @var \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['catalogId' => $catalogId]);
        return $result;
    }
}
