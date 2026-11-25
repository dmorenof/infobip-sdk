<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bc185b494ef7059aff9d68589cd5338df2245f21add51cf1a96e9927af6e30d7;

/**
 * PublicCnamStatus
 */
final class PublicCnamStatus extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicCnamDeliveryStatus $delivery;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicCnamStorageStatus $storage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicCnamDeliveryStatus($value) : parent::assignMember($name, $value),
            'storage' => $value instanceof \stdClass ? $this->storage = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicCnamStorageStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
