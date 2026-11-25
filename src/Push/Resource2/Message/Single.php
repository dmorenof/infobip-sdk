<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource2\Message;

final class Single extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /push/2/message/single [operationId: send-single-push-notification] */
    /**
     * Send single Push notification
     *
     * Use this method to send a single Push notification to one or multiple recipients.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequest $payload): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource2\Message\Single::class)->post($payload);
    }
}
