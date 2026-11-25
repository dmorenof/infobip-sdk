<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource1;

final class Numbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /numbers/1/numbers [operationId: list-owned-numbers] */
    /**
     * List owned numbers
     *
     * Use this method to get all the owned numbers for this account.
     */
    public static function get(?\InfobipSDK\GetParams\Numbers\Resource1\Numbers $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumbersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource1\Numbers::class)->get($params);
    }

    /** POST /numbers/1/numbers [operationId: purchase-number] */
    /**
     * Purchase number
     *
     * Using the number ID or number, this method enables you to buy a new number. For buying a US number, only the number should be provided. For all other purchases, only the numberKey must be provided.
     * Documentation: https://www.infobip.com/docs/numbers/buy
     */
    public static function post(\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PurchaseNumberRequest $payload): ?\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource1\Numbers::class)->post($payload);
    }

    /** DELETE /numbers/1/numbers/{numberKey} [operationId: cancel-number] */
    /**
     * Cancel number
     *
     * This method will cancel your number. Any number purchased from Infobip Numbers inventory you cancel will become available in the numbers pool for anyone to buy.
     * Documentation: https://www.infobip.com/docs/numbers/getting-started#cancelling-numbers-over-web-interface-numbers-over-web-interface
     */
    public static function deleteByNumberKey(string $numberKey): void
    {
        self::client()->resource(\InfobipSDK\Resources\Numbers\Resource1\Numbers::class)->deleteByNumberKey($numberKey);
    }

    /** GET /numbers/1/numbers/{numberKey} [operationId: get-single-owned-number] */
    /**
     * Get single owned number
     *
     * Get information about an owned number using the unique ID of the number.
     */
    public static function getByNumberKey(string $numberKey): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource1\Numbers::class)->getByNumberKey($numberKey);
    }

    /** PUT /numbers/1/numbers/{numberKey} [operationId: update-owned-number] */
    /**
     * Update owned number
     *
     * Use this method to update the application and the entity, if required, that is linked to a number.
     */
    public static function putByNumberKey(string $numberKey, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UpdateOwnedNumberRequest $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource1\Numbers::class)->putByNumberKey($numberKey, $payload);
    }
}
