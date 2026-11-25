<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender;

final class Calls extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/calls [operationId: get-whatsapp-calling-status] */
    /**
     * Get calling status
     *
     * Get the WhatsApp calling status of a sender, including whether calls are currently allowed and the sender's calling configuration.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(string $sender): \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\CallingManagementStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Calls::class)->get($sender);
    }
}
