<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * CursorPageInfo
 *
 * Cursor information.
 */
final class CursorPageInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'limit' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Requested limit.
     * Format: int32
     */
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /**
     * The `cursor` value you will use in your next request to fetch the subsequent set of results.
     */
    public string $nextCursor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'nextCursor' => is_string($value) ? $this->nextCursor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
