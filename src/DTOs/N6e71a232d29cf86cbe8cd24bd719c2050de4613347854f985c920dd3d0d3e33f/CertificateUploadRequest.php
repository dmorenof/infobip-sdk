<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * CertificateUploadRequest
 */
final class CertificateUploadRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'certificateContent',
        'certificateId',
    ];

    protected const array VALIDATION = [
        'certificateContent' => [
            'minLength' => 1,
        ],
        'certificateId' => [
            'minLength' => 1,
            'maxLength' => 255,
            'pattern' => '^[a-zA-Z0-9._-]+$',
        ],
    ];

    /**
     * Content of a .pem file encoded in Base64 format.
     * Format: base64
     */
    public string $certificateContent {
        set {
            $this->assigning('certificateContent', $value);
            $this->certificateContent = $value;
        }
    }
    /**
     * Certificate's identifier. Must contain only alphanumeric characters, dots, hyphens, and underscores (pattern: `[a-zA-Z0-9._-]`). This identifier will be used as part of a URL path. You cannot change the ID once an item is created.
     */
    public string $certificateId {
        set {
            $this->assigning('certificateId', $value);
            $this->certificateId = $value;
        }
    }
    /**
     * Certificate's passphrase encoded in Base64 format.
     * Format: base64
     */
    public string $passphrase;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'certificateContent' => is_string($value) ? $this->certificateContent = $value : parent::assignMember($name, $value),
            'certificateId' => is_string($value) ? $this->certificateId = $value : parent::assignMember($name, $value),
            'passphrase' => is_string($value) ? $this->passphrase = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
