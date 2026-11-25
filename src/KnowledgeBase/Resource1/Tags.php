<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1;

final class Tags extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/tags [operationId: get-knowledge-base-tags] */
    /**
     * Get tags
     *
     * Returns a paginated list of tags. Optionally filter by tag name. Results are sorted by last updated date in descending order by default.
     */
    public static function get(?\InfobipSDK\GetParams\KnowledgeBase\Resource1\Tags $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageTagListItemResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Tags::class)->get($params);
    }

    /** POST /knowledge-base/1/tags [operationId: create-knowledge-base-tag] */
    /**
     * Create tag
     *
     * Creates a new tag with the given name. Tag name must not contain comma characters.
     */
    public static function post(\InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TagCreateRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TagRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Tags::class)->post($payload);
    }

    /** GET /knowledge-base/1/tags/{tagId} [operationId: get-knowledge-base-tag] */
    /**
     * Get tag
     *
     * Returns the details of a specific tag by its identifier.
     */
    public static function getByTagId(string $tagId): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TagListItemResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Tags::class)->getByTagId($tagId);
    }

    /** PUT /knowledge-base/1/tags/{tagId} [operationId: update-knowledge-base-tag] */
    /**
     * Update tag
     *
     * Renames an existing tag.
     */
    public static function putByTagId(string $tagId, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TagUpdateRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TagRefResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\Tags::class)->putByTagId($tagId, $payload);
    }

}
