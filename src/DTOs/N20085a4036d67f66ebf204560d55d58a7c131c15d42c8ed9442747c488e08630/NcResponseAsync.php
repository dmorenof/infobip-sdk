<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * NcResponseAsync
 */
final class NcResponseAsync extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the request.
     */
    public string $bulkId;
    /**
     * Collection of preliminary lookup results.
     */
    public \InfobipSDK\Collections\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcResponseAsync\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcResponseAsync\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcResponseAsyncDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
