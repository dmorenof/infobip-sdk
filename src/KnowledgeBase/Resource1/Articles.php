<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1;

final class Articles extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/articles [operationId: get-articles] */
    /**
     * Get articles
     *
     * Returns a paginated list of articles. Optionally filter by search expression, tag, or workflow status. Results are sorted by last updated date in descending order by default.
     */
    public static function get(?\InfobipSDK\GetParams\KnowledgeBase\Resource1\Articles $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageArticleListItemResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles::class)->get($params);
    }

    /** POST /knowledge-base/1/articles [operationId: create-article] */
    /**
     * Create article
     *
     * Creates a new knowledge base article with the provided content, tags, and category assignment.
     */
    public static function post(\InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles::class)->post($payload);
    }

    /** DELETE /knowledge-base/1/articles/{articleId} [operationId: delete-article] */
    /**
     * Delete article
     *
     * Soft-deletes a knowledge base article by its identifier.
     */
    public static function deleteByArticleId(string $articleId): void
    {
        self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles::class)->deleteByArticleId($articleId);
    }

    /** GET /knowledge-base/1/articles/{articleId} [operationId: get-article] */
    /**
     * Get article
     *
     * Returns the full details of a specific article including its content, metadata, and tags. Optionally records a view for analytics.
     */
    public static function getByArticleId(string $articleId, ?\InfobipSDK\GetParams\KnowledgeBase\Resource1\Articles\ByArticleId $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleDetailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles::class)->getByArticleId($articleId, $params);
    }

    /** PUT /knowledge-base/1/articles/{articleId} [operationId: update-article] */
    /**
     * Update article
     *
     * Updates an existing knowledge base article with the provided content, tags, and category assignment.
     */
    public static function putByArticleId(string $articleId, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles::class)->putByArticleId($articleId, $payload);
    }

}
