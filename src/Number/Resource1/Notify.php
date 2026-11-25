<?php

declare(strict_types=1);

namespace InfobipSDK\Number\Resource1;

final class Notify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number/1/notify [operationId: number-context-lookup-async] */
    /**
     * Number Context lookup (async)
     *
     * This method allows you to get number context information for requested phone numbers and receive information at some endpoint asynchronously. Information may vary per country and your package. For package change, contact your account manager or [support](https://www.infobip.com/contact).
     */
    public static function post(?\InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcNotifyRequest $payload = null): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcResponseAsync
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Number\Resource1\Notify::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Number\Resource1\Notify::class)->post($payload);
    }

}
