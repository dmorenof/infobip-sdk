<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * DeliveryReports
 */
final class DeliveryReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
