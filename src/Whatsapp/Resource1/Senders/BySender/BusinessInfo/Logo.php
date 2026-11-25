<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\BusinessInfo;

final class Logo extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/business-info/logo [operationId: get-whatsapp-sender-business-logo] */
    /**
     * Download business logo of WhatsApp sender
     *
     * Download WhatsApp sender business logo.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(string $sender): string
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\BusinessInfo\Logo::class)->get($sender);
    }
}
