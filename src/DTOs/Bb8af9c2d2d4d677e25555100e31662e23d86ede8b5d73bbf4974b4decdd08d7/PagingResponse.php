<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * PagingResponse
 */
final class PagingResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'page' => [
            'format' => 'int32',
        ],
        'pageSize' => [
            'format' => 'int32',
        ],
        'totalPages' => [
            'format' => 'int32',
        ],
    ];

    public string $orderBy;
    public string $orderDirection;
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
    public int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
    /**
     * Format: int64
     */
    public int $totalCount;
    /**
     * Format: int32
     */
    public int $totalPages {
        set {
            $this->assigning('totalPages', $value);
            $this->totalPages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'orderBy' => is_string($value) ? $this->orderBy = $value : parent::assignMember($name, $value),
            'orderDirection' => is_string($value) ? $this->orderDirection = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'pageSize' => is_int($value) ? $this->pageSize = $value : parent::assignMember($name, $value),
            'totalCount' => is_int($value) ? $this->totalCount = $value : parent::assignMember($name, $value),
            'totalPages' => is_int($value) ? $this->totalPages = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
