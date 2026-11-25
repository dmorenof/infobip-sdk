<?php

declare(strict_types=1);

namespace InfobipSDK\Settings\Resource1;

final class Accounts extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /settings/1/accounts [operationId: get-all-accounts] */
    /**
     * Get all sub accounts with filter
     *
     * This method allows you to get all sub accounts with custom filter
     */
    public static function get(?\InfobipSDK\GetParams\Settings\Resource1\Accounts $params = null): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\AccountsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource1\Accounts::class)->get($params);
    }

    /** PUT /settings/1/accounts/{accountKey} [operationId: update-account] */
    /**
     * Update account
     *
     * This method allows you to update account. You can only update sub accounts
     */
    public static function putByAccountKey(string $accountKey, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\UpdateAccountRequest $payload): \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Account
    {
        return self::client()->resource(\InfobipSDK\Resources\Settings\Resource1\Accounts::class)->putByAccountKey($accountKey, $payload);
    }
}
