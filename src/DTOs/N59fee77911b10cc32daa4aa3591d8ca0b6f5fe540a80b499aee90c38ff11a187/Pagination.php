<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * Pagination
 */
final class Pagination extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'limit' => [
        'format' => 'int32',
    ],
    'page' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'limit',
    'orderBy',
    'page',
    'totalItems',
];

    /**
     * Format: int32
     */
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public string $orderBy;
    /**
     * Format: int32
     */
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /**
     * Format: int64
     */
    public int $totalItems;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'orderBy' => is_string($value) ? $this->orderBy = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'totalItems' => is_int($value) ? $this->totalItems = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
