<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailMediaUploadedReference
 */
final class EmailMediaUploadedReference extends \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailMediaInlineImage
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'contentId',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * ID of previously uploaded binary content.
     * [Upload binary content](https://infobip.com/docs/api/channels/email/upload-binary-content).
     */
    public string $contentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
