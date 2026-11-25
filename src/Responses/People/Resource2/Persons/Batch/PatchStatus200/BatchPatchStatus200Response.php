<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Persons\Batch\PatchStatus200;

final class BatchPatchStatus200Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of any unsuccessful result from the batch operation for each processed entry. Example, email used in the request already exists.
     */
    public \InfobipSDK\Collections\N2a46bdef7a59052adf56f3586860f3d5ab1636f1aff3d3f91907d1203b8dad63\BatchUpdateResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N2a46bdef7a59052adf56f3586860f3d5ab1636f1aff3d3f91907d1203b8dad63\BatchUpdateResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2a46bdef7a59052adf56f3586860f3d5ab1636f1aff3d3f91907d1203b8dad63\BatchUpdateResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
