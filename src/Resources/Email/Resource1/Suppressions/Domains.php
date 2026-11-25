<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\Suppressions;

final class Domains extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/email/1/suppressions/domains',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\\DomainInfoPageResponse',
    ];

    /**
     * Get suppression domains
     *
     * This method allows you to get domains that can be managed for suppressions and are either owned or have granted permissions.
     */
    public function get(?\InfobipSDK\GetParams\Email\Resource1\Suppressions\Domains $params = null): \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DomainInfoPageResponse
    {
        /** @var \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DomainInfoPageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
