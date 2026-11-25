<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N17363474057d152577564d8587b079aa7bdd070a3f49746aea3319eb57a5830c;

/**
 * ApplicationConfiguration
 */
final class ApplicationConfiguration extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'pinAttempts' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Indicates whether multiple PIN verification is allowed.
     */
    public bool $allowMultiplePinVerifications;
    /**
     * Number of possible PIN attempts.
     * Format: int32
     */
    public int $pinAttempts {
        set {
            $this->assigning('pinAttempts', $value);
            $this->pinAttempts = $value;
        }
    }
    /**
     * Validity period of PIN in specified time unit. Required format: `{timeLength}{timeUnit}`. `timeLength` is optional with a default value of 1. `timeUnit` can be set to: `ms`, `s`, `m`, `h` or `d` representing milliseconds, seconds, minutes, hours, and days respectively. Must not exceed one year, although much lower value is recommended.
     */
    public string $pinTimeToLive;
    /**
     * Overall number of requests over a specified time period for generating a PIN and sending a message using a single application. Required format: `{attempts}/{timeLength}{timeUnit}`. `attempts` and `timeunit` are mandatory and `timeLength` is optional with a default value of 1. `timeUnit` is one of: `ms`, `s`, `m`, `h` or `d` representing milliseconds, seconds, minutes, hours, and days respectively. Must not exceed one year, although much lower value is recommended.
     */
    public string $sendPinPerApplicationLimit;
    /**
     * Number of requests over a specified time period for generating a PIN and sending a message to one destination. Required format: `{attempts}/{timeLength}{timeUnit}`. `attempts` and `timeunit` are mandatory and `timeLength` is optional with a default value of 1. `timeUnit` is one of: `ms`, `s`, `m`, `h` or `d` representing milliseconds, seconds, minutes, hours, and days respectively. Must not exceed one year, although much lower value is recommended.
     */
    public string $sendPinPerPhoneNumberLimit;
    /**
     * The number of PIN verification requests over a specififed time period from one phone number (MSISDN). Required format: `{attempts}/{timeLength}{timeUnit}`. `attempts` and `timeunit` are mandatory and `timeLength` is optional with a default value of 1. `timeUnit` is one of: `ms`, `s`, `m`, `h` or `d` representing milliseconds, seconds, minutes, hours, and days respectively. Must not exceed one day, although much lower value is recommended.
     */
    public string $verifyPinLimit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowMultiplePinVerifications' => is_bool($value) ? $this->allowMultiplePinVerifications = $value : parent::assignMember($name, $value),
            'pinAttempts' => is_int($value) ? $this->pinAttempts = $value : parent::assignMember($name, $value),
            'pinTimeToLive' => is_string($value) ? $this->pinTimeToLive = $value : parent::assignMember($name, $value),
            'sendPinPerApplicationLimit' => is_string($value) ? $this->sendPinPerApplicationLimit = $value : parent::assignMember($name, $value),
            'sendPinPerPhoneNumberLimit' => is_string($value) ? $this->sendPinPerPhoneNumberLimit = $value : parent::assignMember($name, $value),
            'verifyPinLimit' => is_string($value) ? $this->verifyPinLimit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
