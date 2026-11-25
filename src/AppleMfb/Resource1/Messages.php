<?php

declare(strict_types=1);

namespace InfobipSDK\AppleMfb\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /apple-mfb/1/messages [operationId: send-apple-mfb-message] */
    /**
     * Send Apple Messages for Business
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/apple-messages-for-business
     */
    public static function post(\InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbRequest $payload): \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\AppleMfb\Resource1\Messages::class)->post($payload);
    }
}
