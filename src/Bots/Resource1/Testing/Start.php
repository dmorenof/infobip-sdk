<?php

declare(strict_types=1);

namespace InfobipSDK\Bots\Resource1\Testing;

final class Start extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /bots/1/testing/start [operationId: start-test] */
    /**
     * Start test
     *
     * Start the bot simulation to begin test scenario.
     */
    public static function post(\InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\TestingStartRequest $payload): \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\TestingStartResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Bots\Resource1\Testing\Start::class)->post($payload);
    }

}
