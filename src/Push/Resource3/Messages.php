<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource3;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /push/3/messages [operationId: send-push-notifications] */
    /**
     * Send Push notifications
     *
     * This method allows you to send Push notifications to a recipient or multiple recipients in one request.
     * Documentation: https://www.infobip.com/docs/mobile-push
     */
    public static function post(\InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationRequest $payload): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource3\Messages::class)->post($payload);
    }

}
