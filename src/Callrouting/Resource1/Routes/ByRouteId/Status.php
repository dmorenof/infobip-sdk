<?php

declare(strict_types=1);

namespace InfobipSDK\Callrouting\Resource1\Routes\ByRouteId;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /callrouting/1/routes/{routeId}/status [operationId: update-call-route-status] */
    /**
     * Update route status
     *
     * Update status of existing call route.
     */
    public static function post(string $routeId, \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteStatusRequest $payload): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes\ByRouteId\Status::class)->post($routeId, $payload);
    }

}
