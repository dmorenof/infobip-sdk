<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\ContentTree\Nodes;

final class Categories extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /knowledge-base/1/content-tree/nodes/categories [operationId: get-content-tree-categories] */
    /**
     * Get content tree categories
     *
     * Returns a paginated list of top-level category nodes in the content tree. Optionally expand the tree to a specific node. Results are sorted by position in ascending order by default.
     */
    public static function get(?\InfobipSDK\GetParams\KnowledgeBase\Resource1\ContentTree\Nodes\Categories $params = null): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageTreeNodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\ContentTree\Nodes\Categories::class)->get($params);
    }

}
