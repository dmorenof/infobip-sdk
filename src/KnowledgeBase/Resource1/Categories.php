<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1;

final class Categories extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/categories [operationId: get-categories] */
    /**
     * Get categories
     *
     * Returns a paginated list of categories. Optionally filter by category name or content scope. Results are sorted by name in ascending order by default.
     */
    public static function get(?\InfobipSDK\GetParams\KnowledgeBase\Resource1\Categories $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageCategoryItemResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Categories::class)->get($params);
    }
}
