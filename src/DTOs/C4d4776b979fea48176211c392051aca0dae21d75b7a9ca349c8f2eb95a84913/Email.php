<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * Email
 *
 * List of email contacts associated with the sender and displayed to the user on mobile device. Required if phone and website are not provided. Currently, only one entry is supported.
 */
final class Email extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'label',
];

    protected const array VALIDATION = [
    'address' => [
        'minLength' => 1,
        'maxLength' => 100,
    ],
    'label' => [
        'minLength' => 1,
        'maxLength' => 25,
    ],
];

    /**
     * Email address. Must be in valid email format.
     * Format: email
     */
    public string $address {
        set {
            $this->assigning('address', $value);
            $this->address = $value;
        }
    }
    /**
     * Label for the email address. Must be plain text (no URLs, HTML or markup).
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
