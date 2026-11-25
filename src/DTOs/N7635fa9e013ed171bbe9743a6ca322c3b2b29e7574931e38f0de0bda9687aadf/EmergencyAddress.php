<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7635fa9e013ed171bbe9743a6ca322c3b2b29e7574931e38f0de0bda9687aadf;

/**
 * EmergencyAddress
 */
final class EmergencyAddress extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'enabled',
];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Address $address;
    /**
     * Indicates whether configuration is enabled or not.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Address($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
