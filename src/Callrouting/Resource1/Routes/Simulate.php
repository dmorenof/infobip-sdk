<?php

declare(strict_types=1);

namespace InfobipSDK\Callrouting\Resource1\Routes;

final class Simulate extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /callrouting/1/routes/simulate [operationId: simulate-route-selection] */
    /**
     * Simulate route selection
     *
     * Simulates which route will be selected upon predefined request.
     */
    public static function post(\InfobipSDK\DTOs\C5d63eb36983d8ea1e54e74166c0e08ea636cff38a55aa9570bd7ba615a520a0\RouteSimulatorRequest $payload): \InfobipSDK\DTOs\N1e938b22275568ebc747d21724b50c9be18ff5770eb33c37b76fda4633c14bde\RouteResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Callrouting\Resource1\Routes\Simulate::class)->post($payload);
    }

}
