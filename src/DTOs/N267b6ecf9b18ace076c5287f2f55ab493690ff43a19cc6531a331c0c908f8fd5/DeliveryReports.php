<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * DeliveryReports
 */
final class DeliveryReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\DeliveryReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\DeliveryReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\DeliveryReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
