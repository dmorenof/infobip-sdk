<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * PageResponse
 */
final class PageResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'totalPages' => [
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\Collections\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\PageResponse\ElementsCollection $elements;
    /**
     * Format: int64
     */
    public int $total;
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
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'totalPages' => is_int($value) ? $this->totalPages = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
