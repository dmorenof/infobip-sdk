<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * TxtRecordRequest
 */
final class TxtRecordRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fqdn',
        'value',
    ];

    /**
     * The domain name you want to verify for your SIP trunk.
     * Example: "sip.example.com"
     */
    public string $fqdn;
    /**
     * The verification code provided by your service provider.
     * Example: "ms=ms12345678"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fqdn' => is_string($value) ? $this->fqdn = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
