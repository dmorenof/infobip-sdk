<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * FilePlayContent
 */
final class FilePlayContent extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * ID of the previously uploaded audio file.
     */
    public string $fileId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
