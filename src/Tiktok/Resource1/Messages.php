<?php

declare(strict_types=1);

namespace InfobipSDK\Tiktok\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /tiktok/1/messages [operationId: send-tiktok-messages] */
    /**
     * Send TikTok messages
     *
     * Send one or more text, image, or share-post messages to TikTok users in active conversations with your TikTok Business Account. You can send messages only after the user has messaged your Business Account first.
     * Documentation: https://www.infobip.com/docs/tiktok
     */
    public static function post(\InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokRequest $payload): \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Tiktok\Resource1\Messages::class)->post($payload);
    }

}
