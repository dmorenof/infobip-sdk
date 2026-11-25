<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * MoveTreeNodeRequest
 */
final class MoveTreeNodeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'position',
        'targetNodeId',
    ];

    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\Position $position;
    /**
     * Identifier of the target node for relative positioning.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $targetNodeId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\Position::from($value) : parent::assignMember($name, $value),
            'targetNodeId' => is_string($value) ? $this->targetNodeId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
