<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * V1PhoneNumberButtonApiData
 */
final class V1PhoneNumberButtonApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1ButtonApiData
{
    public const array REQUIRED_FIELDS = [
        'text',
    ];

    protected const array VALIDATION = [
        'phoneNumber' => [
            'minLength' => 1,
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 25,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Phone number to which a phone call would be placed by end-user when hitting the button.
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
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
