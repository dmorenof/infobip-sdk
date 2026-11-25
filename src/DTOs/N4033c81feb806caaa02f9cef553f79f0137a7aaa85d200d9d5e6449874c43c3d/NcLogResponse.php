<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d;

/**
 * NcLogResponse
 */
final class NcLogResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of logs.
     */
    public \InfobipSDK\Collections\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\NcLogResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\NcLogResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\NcLog::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
