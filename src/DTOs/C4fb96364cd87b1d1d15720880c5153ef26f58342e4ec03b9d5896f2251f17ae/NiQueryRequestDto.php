<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * NiQueryRequestDto
 *
 * Number Intelligence query request object.
 */
final class NiQueryRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'attributes',
        'callbackUrl',
        'consentGranted',
        'phoneNumber',
    ];

    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\AttributesRequestDto $attributes;
    /**
     * Your URL that will be called to provide [query results](#platform-connectivity/mobile-identity/receive-number-intelligence-query-results) when the process is completed.
     * Example: "https://api.infobip.com/my-callback-webook/my-path"
     */
    public string $callbackUrl;
    /**
     * Indicates whether you have consent from mobile phone number's owner to perform this request. All requests that do not have this property set to "true" will be rejected.
     * Example: true
     */
    public bool $consentGranted;
    /**
     * Mobile phone number (MSISDN) to perform a query by. The number must be in international format.
     * Example: "441134961234"
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attributes' => $value instanceof \stdClass ? $this->attributes = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\AttributesRequestDto($value) : parent::assignMember($name, $value),
            'callbackUrl' => is_string($value) ? $this->callbackUrl = $value : parent::assignMember($name, $value),
            'consentGranted' => is_bool($value) ? $this->consentGranted = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
