<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

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
