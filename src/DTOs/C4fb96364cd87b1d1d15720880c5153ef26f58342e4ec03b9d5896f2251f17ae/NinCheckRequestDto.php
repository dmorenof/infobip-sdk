<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * NinCheckRequestDto
 *
 * National Identity Number check request object.
 */
final class NinCheckRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'consentGranted',
        'nationalId',
        'phoneNumber',
    ];

    protected const array VALIDATION = [
        'nationalId' => [
            'minLength' => 1,
            'maxLength' => 50,
        ],
    ];

    /**
     * Indicates whether you have consent from mobile phone number's owner to perform this request. All requests that do not have this property set to "true" will be rejected.
     * Example: true
     */
    public bool $consentGranted;
    /**
     * Document type that will be used to check for a match against a mobile phone number.
     * Currently, used and mandatory only in Colombia.
     *
     */
    public \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NinCheckRequestDto\DocumentTypeEnum $documentType;
    /**
     * National Identification Number that will be used to check for a match against a mobile phone number.
     * Example: "123.456.789-10"
     */
    public string $nationalId {
        set {
            $this->assigning('nationalId', $value);
            $this->nationalId = $value;
        }
    }
    /**
     * Mobile phone number (MSISDN) to perform a query by. The number must be in international format.
     * Example: "441134961234"
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'consentGranted' => is_bool($value) ? $this->consentGranted = $value : parent::assignMember($name, $value),
            'documentType' => is_string($value) ? $this->documentType = \InfobipSDK\Enums\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NinCheckRequestDto\DocumentTypeEnum::from($value) : parent::assignMember($name, $value),
            'nationalId' => is_string($value) ? $this->nationalId = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
