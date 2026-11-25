<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1;

final class Folders extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/folders [operationId: get-folders] */
    /**
     * Get folders
     *
     * Returns a paginated list of folders. Optionally filter by folder name or category. Results are sorted by name in ascending order by default.
     */
    public static function get(?\InfobipSDK\GetParams\KnowledgeBase\Resource1\Folders $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageFolderItemResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Folders::class)->get($params);
    }
}
