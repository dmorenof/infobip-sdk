<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75;

/**
 * PhoneNumberRequest
 */
final class PhoneNumberRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'countryCode',
        'displayName',
        'locale',
        'phoneNumber',
        'type',
    ];

    protected const array VALIDATION = [
        'countryCode' => [
            'minLength' => 1,
        ],
        'displayName' => [
            'minLength' => 1,
        ],
        'phoneNumber' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Country code of the phone number.
     * Example: "44"
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    /**
     * Display name of the phone number.
     * Example: "Infobip"
     */
    public string $displayName {
        set {
            $this->assigning('displayName', $value);
            $this->displayName = $value;
        }
    }
    /**
     * Locale which will be used to submit for verification.
     * Example: "en_US"
     */
    public string $locale;
    /**
     * Phone number to add.
     * Example: "7796344125"
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }
    public \InfobipSDK\Enums\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\NumberType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\NumberType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
