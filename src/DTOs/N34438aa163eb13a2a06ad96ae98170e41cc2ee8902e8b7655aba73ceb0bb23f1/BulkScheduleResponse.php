<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * BulkScheduleResponse
 */
final class BulkScheduleResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bulks',
    'externalBulkId',
];

    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkScheduleResponse\BulksCollection $bulks;
    /**
     * The ID that uniquely identifies the sent bulk.
     */
    public string $externalBulkId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulks' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->bulks = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkScheduleResponse\BulksCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkInfo::class)) : parent::assignMember($name, $value),
            'externalBulkId' => is_string($value) ? $this->externalBulkId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
