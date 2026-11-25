<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * EditPermissions
 *
 * The editPermissions object to indicate editing permissions for the number.
 */
final class EditPermissions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether the  the permissions allow for editing number configuration.
     */
    public bool $canEditConfiguration;
    /**
     * Indicates whether the permissions allow for editing a number.
     */
    public bool $canEditNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canEditConfiguration' => is_bool($value) ? $this->canEditConfiguration = $value : parent::assignMember($name, $value),
            'canEditNumber' => is_bool($value) ? $this->canEditNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
