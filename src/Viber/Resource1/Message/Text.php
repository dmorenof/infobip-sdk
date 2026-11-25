<?php

declare(strict_types=1);

namespace InfobipSDK\Viber\Resource1\Message;

final class Text extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /viber/1/message/text [operationId: send-viber-text-message] */
    /**
     * Send Viber text message(s)
     *
     * Send one or many text message(s) possibly to multiple recipients.
     * Documentation: https://www.infobip.com/docs/viber
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\BulkTextMessage $payload): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\BulkMessageInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource1\Message\Text::class)->post($payload);
    }

}
