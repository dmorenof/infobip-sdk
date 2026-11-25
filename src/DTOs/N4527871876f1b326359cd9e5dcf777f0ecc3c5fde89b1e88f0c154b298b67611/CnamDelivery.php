<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CnamDelivery
 *
 * CNAM Delivery is enabled on your DID at an additional charge that allows you to see the caller identification of the person calling you.
 */
final class CnamDelivery extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether configuration is enabled or not.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
