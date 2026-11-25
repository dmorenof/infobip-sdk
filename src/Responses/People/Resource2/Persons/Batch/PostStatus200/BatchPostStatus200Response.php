<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Persons\Batch\PostStatus200;

final class BatchPostStatus200Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of any unsuccessful result from the batch operation for each processed entry. Example, email used in the request already exists.
     */
    public \InfobipSDK\Collections\C33895ecf7bbac41312b872d159ba76eaa0387a04e1ff6d8280d7b04d6e7955c\BatchCreateResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\C33895ecf7bbac41312b872d159ba76eaa0387a04e1ff6d8280d7b04d6e7955c\BatchCreateResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C33895ecf7bbac41312b872d159ba76eaa0387a04e1ff6d8280d7b04d6e7955c\BatchCreateResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
