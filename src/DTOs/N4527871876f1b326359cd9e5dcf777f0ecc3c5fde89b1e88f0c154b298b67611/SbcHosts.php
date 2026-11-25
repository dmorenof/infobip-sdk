<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SbcHosts
 *
 * Infobip SBC (Session Border Controller) hosts.
 */
final class SbcHosts extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\StringCollection $backup;
    public \InfobipSDK\Collections\StringCollection $primary;
    public \InfobipSDK\Collections\StringCollection $subnets;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backup' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->backup = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'primary' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->primary = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'subnets' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->subnets = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
