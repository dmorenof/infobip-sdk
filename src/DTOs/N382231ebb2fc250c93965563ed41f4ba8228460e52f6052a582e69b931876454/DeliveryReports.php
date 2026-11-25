<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * DeliveryReports
 */
final class DeliveryReports extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collection of reports, one per every message.
     */
    public \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\DeliveryReports\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\DeliveryReports\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\DeliveryReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
