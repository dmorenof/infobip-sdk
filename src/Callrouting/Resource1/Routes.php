<?php

declare(strict_types=1);

namespace InfobipSDK\Callrouting\Resource1;

final class Routes extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /callrouting/1/routes [operationId: get-call-routes] */
    /**
     * Get call routes
     *
     * Get existing call routes with pagination.
     */
    public static function get(?\InfobipSDK\GetParams\Callrouting\Resource1\Routes $params = null): \InfobipSDK\DTOs\N5cb8669321a9b28a95445a23a292423b19c28f831eda62032aef9c6b53da7813\RouteResponsePage
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes::class)->get($params);
    }

    /** POST /callrouting/1/routes [operationId: create-call-route] */
    /**
     * Create a call route
     *
     * Create a new call route.
     */
    public static function post(\InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteRequest $payload): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes::class)->post($payload);
    }

    /** DELETE /callrouting/1/routes/{routeId} [operationId: delete-call-route] */
    /**
     * Delete a call route
     *
     * Delete an existing call route.
     */
    public static function deleteByRouteId(string $routeId): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes::class)->deleteByRouteId($routeId);
    }

    /** GET /callrouting/1/routes/{routeId} [operationId: get-call-route] */
    /**
     * Get a call route
     *
     * Get an existing call route.
     */
    public static function getByRouteId(string $routeId): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes::class)->getByRouteId($routeId);
    }

    /** PATCH /callrouting/1/routes/{routeId} [operationId: set-order-call-route] */
    /**
     * Set order on call route
     *
     * Set order on existing call route.
     */
    public static function patchByRouteId(string $routeId, \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteOrderRequest $payload): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes::class)->patchByRouteId($routeId, $payload);
    }

    /** PUT /callrouting/1/routes/{routeId} [operationId: update-call-route] */
    /**
     * Update a call route
     *
     * Update an already existing call route. Fields that are not sent in the request body will take default values and overwrite existing ones.
     */
    public static function putByRouteId(string $routeId, \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteRequest $payload): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes::class)->putByRouteId($routeId, $payload);
    }
}
