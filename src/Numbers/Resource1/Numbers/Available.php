<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource1\Numbers;

final class Available extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /numbers/1/numbers/available [operationId: get-available-numbers] */
    /**
     * Get available numbers
     *
     * Use this method to get all the numbers available to buy. Use the query parameters to filter the returned numbers for specific details.
     * Documentation: https://www.infobip.com/docs/numbers/types
     */
    public static function get(?\InfobipSDK\GetParams\Numbers\Resource1\Numbers\Available $params = null): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumbersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource1\Numbers\Available::class)->get($params);
    }

}
