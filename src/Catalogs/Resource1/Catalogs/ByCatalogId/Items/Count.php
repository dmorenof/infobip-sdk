<?php

declare(strict_types=1);

namespace InfobipSDK\Catalogs\Resource1\Catalogs\ByCatalogId\Items;

final class Count extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /catalogs/1/catalogs/{catalogId}/items/count [operationId: get-item-count] */
    /**
     * Get item count
     *
     * Use this method to get the total number of items in a specific catalog.
     */
    public static function get(int $catalogId): \InfobipSDK\DTOs\E6e93dd514df725f71bff0da51b4f6588e807f5cb84f3d1063a226fc7a7537eb\CountResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Catalogs\Resource1\Catalogs\ByCatalogId\Items\Count::class)->get($catalogId);
    }
}
