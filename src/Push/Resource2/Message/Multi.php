<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource2\Message;

final class Multi extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /push/2/message/multi [operationId: send-multiple-push-notifications] */
    /**
     * Send multiple Push notifications
     *
     * Use this method when sending a large amount of messages or targeting different user segments with different messages to optimize data traffic and increase performance.
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushRequestMulti $payload): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource2\Message\Multi::class)->post($payload);
    }
}
