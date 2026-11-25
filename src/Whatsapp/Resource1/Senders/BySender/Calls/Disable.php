<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Calls;

final class Disable extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/senders/{sender}/calls/disable [operationId: disable-whatsapp-voice] */
    /**
     * Disable WhatsApp Voice
     *
     * Disables WhatsApp Voice for the specified sender.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Calls\Disable::class)->post($sender);
    }

}
