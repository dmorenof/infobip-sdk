<?php

declare(strict_types=1);

namespace InfobipSDK\Bots\Resource1\Testing\ByTestId;

final class SendMessage extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /bots/1/testing/{testId}/send-message [operationId: send-test-message] */
    /**
     * Send message
     *
     * Send inbound message to active test scenario.
     */
    public static function post(int $testId, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\InboundTestingRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Bots\Resource1\Testing\ByTestId\SendMessage::class)->post($testId, $payload);
    }
}
