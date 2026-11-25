<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * SenderPublicKeyResponse
 *
 * WhatsApp sender public key information
 */
final class SenderPublicKeyResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'publicKey',
    'publicKeySignatureStatus',
];

    /**
     * PEM-formatted customer public key
     * Example: "-----BEGIN RSA PUBLIC KEY-----\nMIIBIjANBgkqhkiG...\n-----END RSA PUBLIC KEY-----"
     */
    public string $publicKey;
    /**
     * Status of the customer public key signature
     * Example: "VALID"
     */
    public string $publicKeySignatureStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'publicKey' => is_string($value) ? $this->publicKey = $value : parent::assignMember($name, $value),
            'publicKeySignatureStatus' => is_string($value) ? $this->publicKeySignatureStatus = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
