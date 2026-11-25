<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48;

/**
 * BulkResponse
 */
final class BulkResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique ID of the bulk request.
     */
    public string $bulkId;
    /**
     * Bulk call list.
     */
    public \InfobipSDK\Collections\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkResponse\CallsCollection $calls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'calls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->calls = new \InfobipSDK\Collections\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkResponse\CallsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkCall::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
