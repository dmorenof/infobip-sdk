<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

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
