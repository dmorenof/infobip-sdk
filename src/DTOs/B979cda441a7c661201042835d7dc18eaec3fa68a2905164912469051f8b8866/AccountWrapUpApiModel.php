<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * AccountWrapUpApiModel
 * Example: {"wrapUpSeconds":30,"canExtendWrapUp":true,"enabled":true}
 */
final class AccountWrapUpApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'canExtendWrapUp',
        'enabled',
        'wrapUpSeconds',
    ];

    protected const array VALIDATION = [
        'wrapUpSeconds' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Determines if agents can extend wrap up time.
     */
    public bool $canExtendWrapUp;
    /**
     * Determines if wrap up is enabled for the account.
     */
    public bool $enabled;
    /**
     * Wrap up duration.
     * Format: int32
     */
    public int $wrapUpSeconds {
        set {
            $this->assigning('wrapUpSeconds', $value);
            $this->wrapUpSeconds = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canExtendWrapUp' => is_bool($value) ? $this->canExtendWrapUp = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'wrapUpSeconds' => is_int($value) ? $this->wrapUpSeconds = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
