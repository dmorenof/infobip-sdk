<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * PageInfo
 *
 * Contains information about the page.
 */
final class PageInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'page',
    'size',
    'totalPages',
    'totalResults',
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 1,
        'format' => 'int32',
    ],
    'totalPages' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'totalResults' => [
        'minimum' => 0,
    ],
];

    /**
     * Requested page number.
     * Format: int32
     */
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
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
    /**
     * The total number of pages of the results matching the requested parameters.
     * Format: int32
     */
    public int $totalPages {
        set {
            $this->assigning('totalPages', $value);
            $this->totalPages = $value;
        }
    }
    /**
     * The total number of the results matching the requested parameters.
     * Format: int64
     */
    public int $totalResults {
        set {
            $this->assigning('totalResults', $value);
            $this->totalResults = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'totalPages' => is_int($value) ? $this->totalPages = $value : parent::assignMember($name, $value),
            'totalResults' => is_int($value) ? $this->totalResults = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
