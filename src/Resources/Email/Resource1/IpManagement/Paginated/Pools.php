<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\IpManagement\Paginated;

final class Pools extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/email/1/ip-management/paginated/pools',
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
        'responseType' => '\\InfobipSDK\\Responses\\Email\\Resource1\\IpManagement\\Paginated\\Pools\\Get',
    ];

    /**
     * Get IP pools (paginated)
     *
     * Returns paginated IP pools owned by this account.
     */
    public function get(?\InfobipSDK\GetParams\Email\Resource1\IpManagement\Paginated\Pools $params = null): \InfobipSDK\Responses\Email\Resource1\IpManagement\Paginated\Pools\Get
    {
        /** @var \InfobipSDK\Responses\Email\Resource1\IpManagement\Paginated\Pools\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
