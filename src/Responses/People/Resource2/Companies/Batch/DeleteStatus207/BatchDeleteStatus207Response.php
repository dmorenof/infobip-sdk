<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Companies\Batch\DeleteStatus207;

final class BatchDeleteStatus207Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of any unsuccessful result from the batch operation for each processed entry. Example, name used in the request already exists.
     */
    public \InfobipSDK\Collections\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
