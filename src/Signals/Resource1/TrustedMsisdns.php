<?php

declare(strict_types=1);

namespace InfobipSDK\Signals\Resource1;

final class TrustedMsisdns extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /signals/1/trusted-msisdns [operationId: remove-trusted-msisdns] */
    /**
     * Remove phone numbers from a list
     *
     * Remove phone numbers from a trusted MSISDN list.
     *
     *
     * **Intended for non-CPaaSX accounts.** CPaaSX accounts should use the CPaaSX Signals trusted MSISDNs API.
     *
     */
    public static function delete(\InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnRequest $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource1\TrustedMsisdns::class)->delete($payload);
    }

    /** POST /signals/1/trusted-msisdns [operationId: add-trusted-msisdns] */
    /**
     * Add phone numbers to a list
     *
     * Add phone numbers to a trusted MSISDN list so that Signals never blocks messages sent to these numbers.
     *
     *
     * **Intended for non-CPaaSX accounts.** CPaaSX accounts should use the CPaaSX Signals trusted MSISDNs API.
     *
     */
    public static function post(\InfobipSDK\DTOs\N6ac22f6f3346b6db1d4c8464d58b1329c30df516bb4206699a93fd8658df38c7\TrustedMsisdnRequest $payload): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Signals\Resource1\TrustedMsisdns::class)->post($payload);
    }
}
