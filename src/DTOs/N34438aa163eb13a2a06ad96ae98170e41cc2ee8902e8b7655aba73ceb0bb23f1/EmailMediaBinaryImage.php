<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailMediaBinaryImage
 */
final class EmailMediaBinaryImage extends \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMediaInlineImage
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * File content as a Base64-encoded byte array.
     * Format: byte
     */
    public string $content;
    /**
     * Content type.
     */
    public string $contentType;
    /**
     * File name.
     */
    public string $fileName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
