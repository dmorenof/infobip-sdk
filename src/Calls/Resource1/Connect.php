<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Connect extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/connect [operationId: connect-calls] */
    /**
     * Connect calls
     *
     * Connect calls in a conference.
     */
    public static function post(\InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40\ConnectRequest $payload): \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Connect::class)->post($payload);
    }
}
