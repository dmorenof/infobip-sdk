<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * TxtRecordResponse
 */
final class TxtRecordResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * SIP trunk ID.
     * Example: "034e622a-cc7e-456d-8a10-0ba43b11aa5e"
     */
    public string $trunkId;
    /**
     * List of verified domains for this SIP trunk.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordResponse\TxtRecordsCollection $txtRecords;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'trunkId' => is_string($value) ? $this->trunkId = $value : parent::assignMember($name, $value),
            'txtRecords' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->txtRecords = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecordResponse\TxtRecordsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TxtRecord::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
