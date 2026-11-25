<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48;

/**
 * BulkRequest
 */
final class BulkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callsConfigurationId',
    'items',
];

    /**
     * Unique ID of the bulk request. If it's not set, a unique ID will be assigned to the bulk request.
     */
    public string $bulkId;
    /**
     * Calls Configuration ID.
     */
    public string $callsConfigurationId;
    /**
     * Bulk item list.
     */
    public \InfobipSDK\Collections\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkRequest\ItemsCollection $items;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \InfobipSDK\Collections\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkRequest\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkItem::class)) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
