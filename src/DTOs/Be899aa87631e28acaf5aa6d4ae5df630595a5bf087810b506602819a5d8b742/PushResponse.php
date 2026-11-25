<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushResponse
 */
final class PushResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bulks',
];

    /**
     * Array of push bulk responses
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushResponse\BulksCollection $bulks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulks' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->bulks = new \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushResponse\BulksCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushBulkResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
