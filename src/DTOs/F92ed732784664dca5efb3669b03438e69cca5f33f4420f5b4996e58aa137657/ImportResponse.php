<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657;

/**
 * ImportResponse
 * Example: {"resourceId":"12345"}
 */
final class ImportResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'resourceId',
];

    /**
     * SaaS resource identifier.
     */
    public string $resourceId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resourceId' => is_string($value) ? $this->resourceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
