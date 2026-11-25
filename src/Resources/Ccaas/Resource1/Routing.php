<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Ccaas\Resource1;

final class Routing extends \InfobipSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/ccaas/1/routing',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\StatusCodeResponse',
    ];

    /**
     * Delete routing
     *
     * Use this method to delete routing. No parameters are required for this action.
     *
     * This operation will delete routing with all rules inside, so all new inbound messages destined to routing will be routed to the default queue.
     * <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public function delete(): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        /** @var \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse $result */
        $result = $this->executeOperation(self::operation(self::DELETE));
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/ccaas/1/routing',
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
            400 => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\StatusCodeResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\StatusCodeResponse',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\RoutingRulesResultPage',
        'querySerialization' => [
            'ruleIds' => 'multi',
        ],
    ];

    /**
     * Get routing
     *
     * Use this method to get a list of rules within the routing. Pagination is set to single page result with a maximum of 999 items ordered by "order". As rules inside routing are stored, executed and retrieved in provided order with the SET method, that order can't be changed. <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public function get(?\InfobipSDK\GetParams\Ccaas\Resource1\Routing $params = null): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RoutingRulesResultPage
    {
        /** @var \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RoutingRulesResultPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array PUT = [
        'method' => 'PUT',
        'path' => '/ccaas/1/routing',
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
            400 => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\StatusCodeResponse',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\StatusCodeResponse',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\\StatusCodeResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Collections\\RoutingBodyCollection',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create routing
     *
     * Create routing method creates a new routing setup if it does not exist or replaces the existing setup. As rules inside routing are stored, executed, and retrieved in the provided order with this method, that order cannot be changed. Every expression within routing can be constructed with at least one or more available operators. The result of the expression will be a success (TRUE) only if all results of operations are TRUE. The query will be executed, one expression after another, in the order they are submitted until new a inbound message first matches the expression. Then the message will be assigned to the matched queue.
     *
     * The order of rules inside routing is essential for proper routing, as rules match in the provided order. The first rule matching the message will be used.
     * <a href="https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing" target="_blank">More info</a>
     */
    public function put(\InfobipSDK\Collections\RoutingBodyCollection $payload): \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse
    {
        /** @var \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\StatusCodeResponse $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
