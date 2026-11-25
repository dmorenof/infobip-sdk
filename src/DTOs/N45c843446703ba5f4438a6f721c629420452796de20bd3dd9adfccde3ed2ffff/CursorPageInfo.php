<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

/**
 * CursorPageInfo
 *
 * Paging response.
 */
final class CursorPageInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'nextCursor',
        'previousCursor',
        'size',
    ];

    protected const array VALIDATION = [
        'size' => [
            'minimum' => 1,
            'format' => 'int32',
        ],
    ];

    /**
     * The next cursor, empty if there are no subsequent results.
     */
    public string $nextCursor;
    /**
     * The previous cursor, empty if there are no previous results.
     */
    public string $previousCursor;
    /**
     * Requested page size.
     * Format: int32
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'nextCursor' => is_string($value) ? $this->nextCursor = $value : parent::assignMember($name, $value),
            'previousCursor' => is_string($value) ? $this->previousCursor = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
