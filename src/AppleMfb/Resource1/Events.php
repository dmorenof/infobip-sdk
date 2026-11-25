<?php

declare(strict_types=1);

namespace InfobipSDK\AppleMfb\Resource1;

final class Events extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /apple-mfb/1/events [operationId: send-apple-mfb-event] */
    /**
     * Send Apple Events
     *
     * Send one or more events to multiple recipients.
     * Documentation: https://www.infobip.com/docs/apple-messages-for-business
     */
    public static function post(\InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbEventRequest $payload): \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\AppleMfb\Resource1\Events::class)->post($payload);
    }
}
