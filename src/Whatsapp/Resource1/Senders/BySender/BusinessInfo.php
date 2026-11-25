<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender;

final class BusinessInfo extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/business-info [operationId: get-whatsapp-sender-business-info] */
    /**
     * Get business info of WhatsApp sender
     *
     * Get WhatsApp sender business information, such as about, address, description, email, vertical, websites, and display name.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessInfoResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\BusinessInfo::class)->get($sender);
    }

    /** PATCH /whatsapp/1/senders/{sender}/business-info [operationId: update-whatsapp-sender-business-info] */
    /**
     * Update business info of WhatsApp sender
     *
     * Update WhatsApp sender business information, such as about, address, description, email, vertical, websites, and logo.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function patch(string $sender, \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessInfoRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\BusinessInfo::class)->patch($sender, $payload);
    }

}
