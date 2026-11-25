<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * TemplateUpdateRequest
 *
 * Request to update a Viber template. Only the name can be updated — it is stored on the Infobip side and not pushed to Viber.
 */
final class TemplateUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 0,
        'maxLength' => 64,
        'pattern' => '^[\\p{L}0-9 ]*$',
    ],
];

    /**
     * Human-readable name for the template. Must be unique per sender. Maximum 64 characters, allowed: letters, digits, and spaces.
     * Example: "Account Balance Notification"
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
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
