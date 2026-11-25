<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Calls;

final class Enable extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/senders/{sender}/calls/enable [operationId: enable-whatsapp-voice] */
    /**
     * Enable WhatsApp Voice
     *
     * Enables WhatsApp Voice for the specified sender.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\EnableWhatsAppVoiceRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Calls\Enable::class)->post($sender, $payload);
    }

}
