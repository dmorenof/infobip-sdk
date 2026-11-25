<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * PublicKeyResponse
 */
final class PublicKeyResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'publicKey',
];

    /**
     * Public key. The value is *Base64 encoded*!
     * Example: "MIICIjANB***hidden***Mvb0CAwEAAQ=="
     */
    public string $publicKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'publicKey' => is_string($value) ? $this->publicKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
