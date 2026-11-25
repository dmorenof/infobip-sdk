<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * PagingInfo
 */
final class PagingInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'totalPages',
    'totalResults',
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
    ],
    'size' => [
        'maximum' => 100,
        'exclusiveMinimum' => 0,
    ],
];

    /**
     * Page number.
     */
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /**
     * Number of records per page.
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /**
     * Total number of pages available based on the total number of records and page size.
     */
    public int $totalPages;
    /**
     * Total number of records available across all pages.
     */
    public int $totalResults;

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
