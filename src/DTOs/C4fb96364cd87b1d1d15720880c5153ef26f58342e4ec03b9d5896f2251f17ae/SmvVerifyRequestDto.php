<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * SmvVerifyRequestDto
 *
 * Silent Mobile Verification request object.
 */
final class SmvVerifyRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callbackUrl',
    'consentGranted',
    'phoneNumber',
];

    protected const array VALIDATION = [
    'devicePort' => [
        'format' => 'int32',
    ],
];

    /**
     * Your URL that will be called to provide [result](#platform-connectivity/mobile-identity/receive-silent-mobile-verification-result) when the process is completed.
     * Example: "https://api.infobip.com/my-callback-webook/my-path"
     */
    public string $callbackUrl;
    /**
     * Indicates whether you have consent from mobile phone number's owner to perform this request. All requests that do not have this property set to "true" will be rejected.
     * Example: true
     */
    public bool $consentGranted;
    /**
     * IPv4 or IPv6 address of the mobile device that will be verified with operator. Currently, can be used only in Brazil.
     * Example: "10.20.30.100|1111:22222:3333:4444:AAAA:BBBB:CCCC:DDDD"
     * Format: xxx.xxx.xxx.xxx|xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xxxx
     */
    public string $deviceIp;
    /**
     * Port of the mobile device that will be verified with operator. Can be used only when "deviceIp" is also provided. Currently, can be used only in Brazil.
     * Example: 54321
     * Format: int32
     */
    public int $devicePort {
        set {
            $this->assigning('devicePort', $value);
            $this->devicePort = $value;
        }
    }
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
            'callbackUrl' => is_string($value) ? $this->callbackUrl = $value : parent::assignMember($name, $value),
            'consentGranted' => is_bool($value) ? $this->consentGranted = $value : parent::assignMember($name, $value),
            'deviceIp' => is_string($value) ? $this->deviceIp = $value : parent::assignMember($name, $value),
            'devicePort' => is_int($value) ? $this->devicePort = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'returnUrl' => is_string($value) ? $this->returnUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
