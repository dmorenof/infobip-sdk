<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier;

final class Identity extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /whatsapp/1/{sender}/contacts/{userIdentifier}/identity [operationId: delete-whatsapp-identity] */
    /**
     * Delete identity
     *
     * Delete end user's identity. Feature is not enabled by default.
     * Documentation: https://www.infobip.com/docs/whatsapp/manage-integration/additional-functionalities#detect-identity-changes
     */
    public static function delete(\InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity::class)->delete($identifier);
    }

    /** GET /whatsapp/1/{sender}/contacts/{userIdentifier}/identity [operationId: get-whatsapp-identity] */
    /**
     * Get identity
     *
     * Get end user's identity info. Feature is not enabled by default.
     * Documentation: https://www.infobip.com/docs/whatsapp/manage-integration/additional-functionalities#detect-identity-changes
     */
    public static function get(\InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity $identifier): \InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\IdentityInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity::class)->get($identifier);
    }

    /** PUT /whatsapp/1/{sender}/contacts/{userIdentifier}/identity [operationId: confirm-whatsapp-identity] */
    /**
     * Confirm identity
     *
     * Confirm end user's identity. Feature is not enabled by default.
     * Documentation: https://www.infobip.com/docs/whatsapp/manage-integration/additional-functionalities#detect-identity-changes
     */
    public static function put(\InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity $identifier, \InfobipSDK\DTOs\Ab7498b77a5058e37557279988a806092938b5b30ecbfd39229d94cbcf4bdc07\IdentityConfirmation $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier\Identity::class)->put($identifier, $payload);
    }

}
