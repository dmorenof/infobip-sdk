<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * DeliveryReports
 */
final class DeliveryReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
