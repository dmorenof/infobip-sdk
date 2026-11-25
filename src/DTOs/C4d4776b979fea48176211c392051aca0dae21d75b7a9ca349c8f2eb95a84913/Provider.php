<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * Provider
 *
 * Provider that became available in the country. Once available, this provider can be included in future launch requests for RCS senders targeting this country.
 */
final class Provider extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'status',
    'updatedAt',
];

    /**
     * Name of the provider that became available.
     */
    public string $name;
    /**
     * Availability status of the provider. Currently, only `AVAILABLE` is emitted, indicating that the provider became available in the country.
     */
    public string $status;
    /**
     * Timestamp when the provider became available in the country. (ISO 8601-style timestamp)
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
