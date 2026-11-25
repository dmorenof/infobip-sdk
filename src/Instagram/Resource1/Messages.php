<?php

declare(strict_types=1);

namespace InfobipSDK\Instagram\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /instagram/1/messages [operationId: send-instagram-message] */
    /**
     * Send a Instagram message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/instagram
     */
    public static function post(\InfobipSDK\DTOs\N7c9f96abfad3f4dcf2c0a97ec8d627a73c6fe4ecaf776deaddf2ab2888baddbf\InstagramDmRequest $payload): \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Instagram\Resource1\Messages::class)->post($payload);
    }
}
