<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Companies\Batch\PatchStatus200;

final class BatchPatchStatus200Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of any unsuccessful result from the batch operation for each processed entry. Example, name used in the request already exists.
     */
    public \InfobipSDK\Collections\Ff83b7738574b83363504f874ac9acc399c4aa8206175a6d6d0b7864a951905a\BatchUpdateResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Ff83b7738574b83363504f874ac9acc399c4aa8206175a6d6d0b7864a951905a\BatchUpdateResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Ff83b7738574b83363504f874ac9acc399c4aa8206175a6d6d0b7864a951905a\BatchUpdateResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
