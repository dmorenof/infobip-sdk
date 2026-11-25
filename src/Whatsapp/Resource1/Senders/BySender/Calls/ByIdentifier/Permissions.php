<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier;

final class Permissions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /whatsapp/1/senders/{sender}/calls/{identifier}/permissions [operationId: get-whatsapp-calling-permission] */
    /**
     * Get calling permission
     *
     * Get calling permission info of WhatsApp sender for specified end user identifier, including status, allowed actions, and limitations.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function get(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier\Permissions $identifier): \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppCallingPermissionResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Calls\ByIdentifier\Permissions::class)->get($identifier);
    }
}
