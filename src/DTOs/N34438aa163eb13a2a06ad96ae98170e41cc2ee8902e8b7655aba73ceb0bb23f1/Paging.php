<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * Paging
 *
 * Paging information for the returned page.
 */
final class Paging extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'page' => [
        'format' => 'int32',
    ],
    'size' => [
        'format' => 'int32',
    ],
    'totalPages' => [
        'format' => 'int32',
    ],
    'totalResults' => [
        'format' => 'int32',
    ],
];

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
     * Format: int32
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $totalPages {
        set {
            $this->assigning('totalPages', $value);
            $this->totalPages = $value;
        }
    }
    /**
     * Format: int32
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
