<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * Account
 */
final class Account extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enabled;
    public string $key;
    public string $name;
    public string $ownerKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'ownerKey' => is_string($value) ? $this->ownerKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
