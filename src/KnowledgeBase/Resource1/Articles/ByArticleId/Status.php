<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\Articles\ByArticleId;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /knowledge-base/1/articles/{articleId}/status [operationId: update-article-status] */
    /**
     * Update article status
     *
     * Changes the workflow status of an article to PUBLISHED or DRAFT.
     */
    public static function patch(string $articleId, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UpdateArticleStatusRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles\ByArticleId\Status::class)->patch($articleId, $payload);
    }

}
