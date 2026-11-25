<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailMediaBinaryAttachment
 */
final class EmailMediaBinaryAttachment extends \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMediaAttachment
{
    public const array REQUIRED_FIELDS = [
    'type',
];

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
    /**
     * Optional password used to encrypt PDF attachments. If provided, the generated PDF will be password-protected. Password protection can be applied exclusively to PDF files.
     */
    public string $password;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
