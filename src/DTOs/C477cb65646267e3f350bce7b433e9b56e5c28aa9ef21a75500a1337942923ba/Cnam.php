<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C477cb65646267e3f350bce7b433e9b56e5c28aa9ef21a75500a1337942923ba;

/**
 * Cnam
 */
final class Cnam extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CnamDelivery $delivery;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CnamStorage $storage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CnamDelivery($value) : parent::assignMember($name, $value),
            'storage' => $value instanceof \stdClass ? $this->storage = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CnamStorage($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
