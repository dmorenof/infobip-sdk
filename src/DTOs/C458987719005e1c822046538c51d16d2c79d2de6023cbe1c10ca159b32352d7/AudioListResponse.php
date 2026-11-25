<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * AudioListResponse
 *
 * Paginated list of uploaded audio files for the account.
 */
final class AudioListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hasNext',
        'page',
        'results',
        'size',
    ];

    protected const array VALIDATION = [
        'page' => [
            'format' => 'int32',
        ],
        'size' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Whether another page of results is available.
     * Example: false
     */
    public bool $hasNext;
    /**
     * Requested page number.
     * Example: 0
     * Format: int32
     */
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /**
     * Audio files, ordered newest first.
     */
    public \InfobipSDK\Collections\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioListResponse\ResultsCollection $results;
    /**
     * Page size.
     * Example: 50
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
            'hasNext' => is_bool($value) ? $this->hasNext = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioListResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\AudioListItem::class)) : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
