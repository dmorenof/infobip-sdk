<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Companies\Batch\PostStatus207;

final class BatchPostStatus207Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of result from the batch operation for each processed entry. Example, the first company was created, the second company wasn't created because name already exists.
     */
    public \InfobipSDK\Collections\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
