<?php

declare(strict_types=1);

namespace InfobipSDK\Number\Resource1;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number/1/query [operationId: number-context-lookup] */
    /**
     * Number Context lookup
     *
     * This method allows you to get Number Context information for the requested phone numbers. For package change, contact your account manager or [support](https://www.infobip.com/contact).
     */
    public static function post(?\InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcQueryRequest $payload = null): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcResponse
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\InfobipSDK\Resources\Number\Resource1\Query::class)->post();
        }
        return self::client()->resource(\InfobipSDK\Resources\Number\Resource1\Query::class)->post($payload);
    }
}
