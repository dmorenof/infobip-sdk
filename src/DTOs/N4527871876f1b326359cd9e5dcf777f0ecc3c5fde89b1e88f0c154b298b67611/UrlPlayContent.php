<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * UrlPlayContent
 */
final class UrlPlayContent extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL of the audio file. Only `wav` and `mp3` files are supported.
     */
    public string $fileUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
