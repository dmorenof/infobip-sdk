<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\IpManagement;

final class Domains extends \InfobipSDK\Client
{
    private const array GET_BY_DOMAIN_ID = [
        'method' => 'GET',
        'path' => '/email/1/ip-management/domains/{domainId}',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\\IpDomainResponse',
        'validation' => [
            'domainId' => [
                'minimum' => 1,
            ],
        ],
    ];

    /**
     * Get domain
     *
     * Get detailed information for provided domain such as assigned pools and their IPs.
     */
    public function getByDomainId(int $domainId): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpDomainResponse
    {
        /** @var \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpDomainResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DOMAIN_ID), path: ['domainId' => $domainId]);
        return $result;
    }

}
