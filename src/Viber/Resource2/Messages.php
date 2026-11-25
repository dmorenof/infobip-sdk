<?php

declare(strict_types=1);

namespace InfobipSDK\Viber\Resource2;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /viber/2/messages [operationId: send-viber-messages] */
    /**
     * Send Viber messages
     *
     * Send text, image, video or file messages to a multiple recipients.
     * Documentation: https://www.infobip.com/docs/viber
     */
    public static function post(\InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberRequest $payload): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource2\Messages::class)->post($payload);
    }
}
