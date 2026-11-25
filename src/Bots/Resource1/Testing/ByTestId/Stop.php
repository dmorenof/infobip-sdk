<?php

declare(strict_types=1);

namespace InfobipSDK\Bots\Resource1\Testing\ByTestId;

final class Stop extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /bots/1/testing/{testId}/stop [operationId: stop-test] */
    /**
     * Stop test
     *
     * Stop the bot simulation to finish test scenario.
     */
    public static function post(int $testId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Bots\Resource1\Testing\ByTestId\Stop::class)->post($testId);
    }
}
