<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1;

final class AdAccounts extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messenger/1/ad-accounts [operationId: get-messenger-ad-accounts] */
    /**
     * Get ad accounts
     *
     * Returns all Facebook ad accounts associated with the authenticated marketing account.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function get(): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetAdAccountsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\AdAccounts::class)->get();
    }
}
