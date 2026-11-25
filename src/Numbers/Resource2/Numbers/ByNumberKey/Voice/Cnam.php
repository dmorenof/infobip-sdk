<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey\Voice;

final class Cnam extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /numbers/2/numbers/{numberKey}/voice/cnam [operationId: delete-cnam] */
    /**
     * Delete CNAM
     *
     * Delete CNAM configuration.
     */
    public static function delete(string $numberKey): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::class)->delete($numberKey);
    }

    /** GET /numbers/2/numbers/{numberKey}/voice/cnam [operationId: get-cnam] */
    /**
     * Get CNAM
     *
     * Get CNAM configuration.
     */
    public static function get(string $numberKey): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::class)->get($numberKey);
    }

    /** POST /numbers/2/numbers/{numberKey}/voice/cnam [operationId: create-cnam] */
    /**
     * Create CNAM
     *
     * Create CNAM configuration.
     *
     * This is currently available only for United States and Canada numbers.
     *
     */
    public static function post(string $numberKey, \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $payload): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::class)->post($numberKey, $payload);
    }

    /** PUT /numbers/2/numbers/{numberKey}/voice/cnam [operationId: update-cnam] */
    /**
     * Update CNAM
     *
     * Update a CNAM configuration.
     */
    public static function put(string $numberKey, \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam $payload): \InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba\Cnam
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam::class)->put($numberKey, $payload);
    }

}
