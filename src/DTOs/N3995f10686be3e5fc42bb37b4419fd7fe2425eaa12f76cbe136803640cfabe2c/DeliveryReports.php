<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * DeliveryReports
 */
final class DeliveryReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\DeliveryReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\DeliveryReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\DeliveryReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
