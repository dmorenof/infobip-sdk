<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Callrouting\Resource1\Routes\ByRouteId;

final class Status extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/callrouting/1/routes/{routeId}/status',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
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
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\\RouteResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\\RouteStatusRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update route status
     *
     * Update status of existing call route.
     */
    public function post(string $routeId, \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteStatusRequest $payload): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        /** @var \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload, path: ['routeId' => $routeId]);
        return $result;
    }

}
