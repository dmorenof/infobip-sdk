<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * Phone
 *
 * List of phone contacts associated with the sender and displayed to the user on mobile device. Required if email and website are not provided. Currently, only one entry is supported.
 */
final class Phone extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'label',
        'phoneNumber',
    ];

    protected const array VALIDATION = [
        'label' => [
            'minLength' => 1,
            'maxLength' => 25,
        ],
        'phoneNumber' => [
            'pattern' => '^\\+?[0-9 \\-().]{1,30}$',
        ],
    ];

    /**
     * Label for the phone number. Must be plain text (no URLs, HTML or markup).
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * Phone number. Can be in E.164 format (e.g. +1234567890) or in local/national format (e.g. 1234567). Numbers starting with “+” are validated as E.164, with a known network prefix and a number length that follows country-specific rules. Numbers without “+” must contain only digits and be 3 to 20 characters long.
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
