<?php

declare(strict_types=1);

namespace InfobipSDK\ViberBot\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /viber-bot/1/messages [operationId: send-viber-bot-message] */
    /**
     * Send a Viber Bot message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/viber
     */
    public static function post(\InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotRequest $payload): \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\ViberBot\Resource1\Messages::class)->post($payload);
    }
}
