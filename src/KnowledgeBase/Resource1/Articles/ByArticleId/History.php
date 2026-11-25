<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\Articles\ByArticleId;

final class History extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/articles/{articleId}/history [operationId: get-article-versions] */
    /**
     * Get article versions
     *
     * Returns a paginated list of historical versions for a specific article, sorted by version ID in descending order by default.
     */
    public static function get(string $articleId, ?\InfobipSDK\GetParams\KnowledgeBase\Resource1\Articles\ByArticleId\History $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageArticleVersionDetailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles\ByArticleId\History::class)->get($articleId, $params);
    }

}
