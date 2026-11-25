<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\ContentTree;

final class Nodes extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /knowledge-base/1/content-tree/nodes [operationId: create-content-tree-node] */
    /**
     * Create content tree node
     *
     * Creates a new node in the content tree.
     */
    public static function post(\InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateTreeNodeRequest $payload): \InfobipSDK\Responses\KnowledgeBase\Resource1\ContentTree\Nodes\Post\ContentTreeNodesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\ContentTree\Nodes::class)->post($payload);
    }

    /** DELETE /knowledge-base/1/content-tree/nodes/{nodeId} [operationId: delete-content-tree-node] */
    /**
     * Delete content tree node
     *
     * Deletes a content tree node and its children.
     */
    public static function deleteByNodeId(string $nodeId): void
    {
        self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\ContentTree\Nodes::class)->deleteByNodeId($nodeId);
    }

    /** GET /knowledge-base/1/content-tree/nodes/{nodeId} [operationId: get-content-tree-node] */
    /**
     * Get content tree node
     *
     * Returns the direct children of a specific content tree node.
     */
    public static function getByNodeId(string $nodeId): \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageTreeNodeResponse\ResultsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\ContentTree\Nodes::class)->getByNodeId($nodeId);
    }

    /** PUT /knowledge-base/1/content-tree/nodes/{nodeId} [operationId: update-content-tree-node] */
    /**
     * Update content tree node
     *
     * Updates an existing content tree node.
     */
    public static function putByNodeId(string $nodeId, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UpdateTreeNodeRequest $payload): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TreeNodeResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\ContentTree\Nodes::class)->putByNodeId($nodeId, $payload);
    }

}
