<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CnamStorage
 *
 * CNAM Storage is an up to 15-character name that will identify you to the person that you are calling if they subscribe to caller ID.
 */
final class CnamStorage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 0,
            'maxLength' => 15,
        ],
    ];

    /**
     * Indicates whether configuration is enabled or not.
     */
    public bool $enabled;
    /**
     * Name that will identify you to the person that you are calling.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
