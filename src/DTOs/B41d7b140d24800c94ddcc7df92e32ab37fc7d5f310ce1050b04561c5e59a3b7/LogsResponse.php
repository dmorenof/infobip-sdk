<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7;

/**
 * LogsResponse
 */
final class LogsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'results',
];

    /**
     * Collection of logs.
     */
    public \InfobipSDK\Collections\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7\LogsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7\LogsResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Log::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
