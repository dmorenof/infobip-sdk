<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * TreeNodeResponse
 */
final class TreeNodeResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'articleCount',
    'id',
    'name',
    'parentId',
    'position',
    'root',
    'scope',
    'type',
];

    protected const array VALIDATION = [
    'articleCount' => [
        'format' => 'int32',
    ],
    'position' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of articles in this node.
     * Example: 5
     * Format: int32
     */
    public int $articleCount {
        set {
            $this->assigning('articleCount', $value);
            $this->articleCount = $value;
        }
    }
    /**
     * Child nodes of this tree node.
     */
    public ?\InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageTreeNodeResponse\ResultsCollection $childList;
    /**
     * Whether this node has child nodes.
     * Example: true
     */
    public bool $hasChildren;
    /**
     * Unique identifier of the tree node.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the tree node.
     * Example: "Getting Started"
     */
    public string $name;
    /**
     * Identifier of the parent tree node.
     * Example: "1fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public ?string $parentId;
    /**
     * Ordinal position of the node among siblings.
     * Example: 0
     * Format: int32
     */
    public int $position {
        set {
            $this->assigning('position', $value);
            $this->position = $value;
        }
    }
    /**
     * Whether this is a root node.
     * Example: false
     */
    public bool $root;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope $scope;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource $source;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TreeNodeType $type;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility $visibility;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'articleCount' => is_int($value) ? $this->articleCount = $value : parent::assignMember($name, $value),
            'childList' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->childList = $value === null ? null : new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageTreeNodeResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TreeNodeResponse::class)) : parent::assignMember($name, $value),
            'hasChildren' => is_bool($value) ? $this->hasChildren = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parentId' => $value === null || is_string($value) ? $this->parentId = $value : parent::assignMember($name, $value),
            'position' => is_int($value) ? $this->position = $value : parent::assignMember($name, $value),
            'root' => is_bool($value) ? $this->root = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope::from($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TreeNodeType::from($value) : parent::assignMember($name, $value),
            'visibility' => is_string($value) ? $this->visibility = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
