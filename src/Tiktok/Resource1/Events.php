<?php

declare(strict_types=1);

namespace InfobipSDK\Tiktok\Resource1;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /tiktok/1/events [operationId: send-tiktok-events] */
    /**
     * Send TikTok events
     *
     * Send typing indicator or mark-as-read events to TikTok users in active conversations with your TikTok Business Account.
     * Documentation: https://www.infobip.com/docs/tiktok
     */
    public static function post(\InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\TikTokEventRequest $payload): \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Tiktok\Resource1\Events::class)->post($payload);
    }

}
