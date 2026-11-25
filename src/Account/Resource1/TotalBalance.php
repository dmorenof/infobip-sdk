<?php

declare(strict_types=1);

namespace InfobipSDK\Account\Resource1;

final class TotalBalance extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /account/1/total-balance [operationId: get-total-account-balance] */
    /**
     * Get account balance with free messages
     *
     * Returns the current account balance, monthly balance, monthly and total credit limit, currency details, and the remaining count of free messages per service type.
     */
    public static function get(): \InfobipSDK\DTOs\N66067ae938b1b756af79ad29184e7a22de98929ca991ca01a0c74d258f22a0b6\BalanceInfoResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Account\Resource1\TotalBalance::class)->get();
    }
}
