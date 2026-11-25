<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\IpManagement\Domains\ByDomainId;

final class Pools extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/email/1/ip-management/domains/{domainId}/pools',
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
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'domainId' => [
                'minimum' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\\DomainIpPoolAssignApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Assign IP pool to domain
     *
     * Assign an IP pool to the provided domain.
     */
    public function post(int $domainId, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpPoolAssignApiRequest $payload): void
    {
        $this->executeBody(self::operation(self::POST), $payload, path: ['domainId' => $domainId]);
        return;
    }

    private const array DELETE_BY_POOL_ID = [
        'method' => 'DELETE',
        'path' => '/email/1/ip-management/domains/{domainId}/pools/{poolId}',
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
            204,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            404 => [
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
        'validation' => [
            'domainId' => [
                'minimum' => 1,
            ],
        ],
    ];

    /**
     * Unassign IP pool from domain
     *
     * Unassign a specified pool from the provided domain.
     */
    public function deleteByPoolId(\InfobipSDK\PathParams\Email\Resource1\IpManagement\Domains\ByDomainId\Pools\ByPoolId $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_POOL_ID), path: $identifier);
        return;
    }

    private const array PUT_BY_POOL_ID = [
        'method' => 'PUT',
        'path' => '/email/1/ip-management/domains/{domainId}/pools/{poolId}',
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
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'domainId' => [
                'minimum' => 1,
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\\DomainIpPoolUpdateApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update IP pool sending priority
     *
     * Update specified pool's sending priority for the provided domain.
     */
    public function putByPoolId(\InfobipSDK\PathParams\Email\Resource1\IpManagement\Domains\ByDomainId\Pools\ByPoolId $identifier, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpPoolUpdateApiRequest $payload): void
    {
        $this->executeBody(self::operation(self::PUT_BY_POOL_ID), $payload, path: $identifier);
        return;
    }

}
