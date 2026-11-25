<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * InitZeroRatedRequestDto
 *
 * Silent Mobile Verification zero rated request initialization.
 */
final class InitZeroRatedRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'consentGranted',
    'phoneNumber',
];

    /**
     * Indicates whether you have consent from mobile phone number's owner to perform this request. All requests that do not have this property set to "true" will be rejected.
     * Example: true
     */
    public bool $consentGranted;
    /**
     * Mobile phone number (MSISDN) to verify. The number must be in international format.
     * Example: "441134961234"
     */
    public string $phoneNumber;
    /**
     * An URL to which the mobile device will be redirected to when verification is complete.
     * Example: "https://api.infobip.com/my-site/my-shop.html"
     */
    public string $returnUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'consentGranted' => is_bool($value) ? $this->consentGranted = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'returnUrl' => is_string($value) ? $this->returnUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
