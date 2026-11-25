<?php

declare(strict_types=1);

namespace InfobipSDK\Account\Resource1;

final class Balance extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /account/1/balance [operationId: get-account-balance] */
    /**
     * Get current account balance
     *
     * Returns the current account balance displayed in the currency configured for the account.
     */
    public static function get(): \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\AccountBalance
    {
        return self::client()->resource(\InfobipSDK\Resources\Account\Resource1\Balance::class)->get();
    }

}
