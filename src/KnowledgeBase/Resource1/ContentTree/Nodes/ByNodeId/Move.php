<?php

declare(strict_types=1);

namespace InfobipSDK\KnowledgeBase\Resource1\ContentTree\Nodes\ByNodeId;

final class Move extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /knowledge-base/1/content-tree/nodes/{nodeId}/move [operationId: move-content-tree-node] */
    /**
     * Move content tree node
     *
     * Moves a content tree node to a new position relative to a target node.
     */
    public static function post(string $nodeId, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\MoveTreeNodeRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\KnowledgeBase\Resource1\ContentTree\Nodes\ByNodeId\Move::class)->post($nodeId, $payload);
    }
}
