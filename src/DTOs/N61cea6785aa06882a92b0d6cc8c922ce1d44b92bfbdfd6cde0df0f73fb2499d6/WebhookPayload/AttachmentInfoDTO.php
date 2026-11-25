<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\WebhookPayload;

/**
 * Information about any attachments of the inbound email.
 */
final class AttachmentInfoDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentId',
        'contentType',
        'filename',
        'name',
    ];

    /**
     * Unique ID of the attached file.
     */
    public string $contentId;
    /**
     * Type of the attached file.
     */
    public string $contentType;
    /**
     * Name of the attached file.
     */
    public string $filename;
    /**
     * Name of the variable containing the byte array of the file in the request.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentId' => is_string($value) ? $this->contentId = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
