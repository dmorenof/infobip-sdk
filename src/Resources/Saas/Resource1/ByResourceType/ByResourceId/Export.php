<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Saas\Resource1\ByResourceType\ByResourceId;

final class Export extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/saas/1/{resourceType}/{resourceId}/export',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'OAuth2' => [],
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
        'responseType' => '\\Psr\\Http\\Message\\ResponseInterface',
        'responseMediaType' => 'application/octet-stream',
        'responseEncoding' => 'binary',
        'responseHeaders' => [
            200 => [
                'Content-Disposition' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Export SaaS resource
     *
     * Choose a Saas resource to export and receive the file in the API response.
     */
    public function get(\InfobipSDK\PathParams\Saas\Resource1\ByResourceType\ByResourceId\Export $identifier): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier);
        return $result;
    }

}
