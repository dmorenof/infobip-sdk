<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75;

/**
 * OtpRequest
 */
final class OtpRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'locale',
        'type',
    ];

    /**
     * Locale which will be used to submit for verification.
     * Example: "en_US"
     */
    public string $locale;
    public \InfobipSDK\Enums\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\NumberType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\NumberType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
