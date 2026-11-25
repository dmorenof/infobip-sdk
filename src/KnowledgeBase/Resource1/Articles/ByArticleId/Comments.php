<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\Articles\ByArticleId;

final class Comments extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/articles/{articleId}/comments [operationId: get-article-comments] */
    /**
     * Get article comments
     *
     * Returns all comments for a specific article.
     */
    public static function get(string $articleId): \InfobipSDK\Collections\KnowledgeBase\Resource1\Articles\ByArticleId\Comments\Get\ByArticleIdCommentsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles\ByArticleId\Comments::class)->get($articleId);
    }

    /** POST /knowledge-base/1/articles/{articleId}/comments [operationId: create-article-comment] */
    /**
     * Create comment
     *
     * Adds a new comment to a specific article.
     */
    public static function post(string $articleId, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CommentCreateUpdateRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CommentRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles\ByArticleId\Comments::class)->post($articleId, $payload);
    }

    /** DELETE /knowledge-base/1/articles/{articleId}/comments/{commentId} [operationId: delete-article-comment] */
    /**
     * Delete comment
     *
     * Deletes a specific comment from an article. Only the comment author or users with manage permissions can delete.
     */
    public static function deleteByCommentId(\InfobipSDK\PathParams\KnowledgeBase\Resource1\Articles\ByArticleId\Comments\ByCommentId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles\ByArticleId\Comments::class)->deleteByCommentId($identifier);
    }

    /** PUT /knowledge-base/1/articles/{articleId}/comments/{commentId} [operationId: update-article-comment] */
    /**
     * Update comment
     *
     * Updates the content of a specific comment on an article.
     */
    public static function putByCommentId(\InfobipSDK\PathParams\KnowledgeBase\Resource1\Articles\ByArticleId\Comments\ByCommentId $identifier, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CommentCreateUpdateRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CommentRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Articles\ByArticleId\Comments::class)->putByCommentId($identifier, $payload);
    }

}
