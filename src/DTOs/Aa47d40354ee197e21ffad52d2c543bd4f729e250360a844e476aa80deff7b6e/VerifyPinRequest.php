<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Aa47d40354ee197e21ffad52d2c543bd4f729e250360a844e476aa80deff7b6e;

/**
 * VerifyPinRequest
 */
final class VerifyPinRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'pin',
];

    protected const array WRITE_ONLY_FIELDS = [
    'pin',
];

    /**
     * The PIN code to verify.
     */
    public string $pin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pin' => is_string($value) ? $this->pin = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
