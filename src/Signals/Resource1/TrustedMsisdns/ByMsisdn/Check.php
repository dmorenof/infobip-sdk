<?php

declare(strict_types=1);

namespace InfobipSDK\Signals\Resource1\TrustedMsisdns\ByMsisdn;

final class Check extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /signals/1/trusted-msisdns/{msisdn}/check [operationId: check-trusted-msisdns] */
    /**
     * Check for phone numbers on a list
     *
     * Check whether a phone number exists on a trusted MSISDN list.
     *
     *
     * **Intended for non-CPaaSX accounts.** CPaaSX accounts should use the CPaaSX Signals trusted MSISDNs API.
     *
     */
    public static function get(string $msisdn): \InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnCheckResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource1\TrustedMsisdns\ByMsisdn\Check::class)->get($msisdn);
    }
}
