<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * MergeSuccessResult
 *
 * Successful result for a person merge operation.
 */
final class MergeSuccessResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'index',
    ];

    protected const array VALIDATION = [
        'index' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Unique identifier of the merged person profile.
     * Format: int64
     */
    public int $id;
    /**
     * Index position of this person in the original request batch.
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
