<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de;

/**
 * BatchDeleteRequest
 */
final class BatchDeleteRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of people.
     */
    public \InfobipSDK\Collections\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de\BatchDeleteRequest\PeopleCollection $people;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'people' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->people = new \InfobipSDK\Collections\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de\BatchDeleteRequest\PeopleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de\BatchDeleteEntry::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
