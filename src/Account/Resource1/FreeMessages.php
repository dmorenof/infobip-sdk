<?php

declare(strict_types=1);

namespace InfobipSDK\Account\Resource1;

final class FreeMessages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /account/1/free-messages [operationId: get-free-messages-count] */
    /**
     * Get remaining free messages
     *
     * Returns the remaining number of free messages available for the account.
     */
    public static function get(): \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\FreeMessagesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Account\Resource1\FreeMessages::class)->get();
    }

}
