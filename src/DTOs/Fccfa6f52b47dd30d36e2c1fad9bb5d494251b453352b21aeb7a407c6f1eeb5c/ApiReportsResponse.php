<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c;

/**
 * ApiReportsResponse
 */
final class ApiReportsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of API reports
     */
    public \InfobipSDK\Collections\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\ApiReportsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\ApiReportsResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\ApiReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
