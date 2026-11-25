<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1;

final class Search extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /knowledge-base/1/search [operationId: search-knowledge-base] */
    /**
     * Search knowledge base
     *
     * Performs a full-text search across indexed, published knowledge base content using filter criteria provided in the request body. Draft content is not indexed. Results are paginated.
     */
    public static function post(\InfobipSDK\PostParams\KnowledgeBase\Resource1\Search $params): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageCatalogRecordListItemResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Search::class)->post($params);
    }

}
