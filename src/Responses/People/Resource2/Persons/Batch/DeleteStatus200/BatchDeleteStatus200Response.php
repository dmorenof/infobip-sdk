<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Persons\Batch\DeleteStatus200;

final class BatchDeleteStatus200Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of any unsuccessful result from the batch operation for each processed entry. Example, email used in the request already exists.
     */
    public \InfobipSDK\Collections\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de\BatchDeleteResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de\BatchDeleteResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D0ee6832b8ae2ba6d1bb41f4a297ed26f313a0be247c3016b7bdbb963195d2de\BatchDeleteResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
