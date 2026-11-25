<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0;

/**
 * Attachment
 */
final class Attachment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array VALIDATION = [
        'size' => [
            'format' => 'int32',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'size',
    ];

    /**
     * Content type of the attachment.
     * Example: "application/pdf"
     */
    public string $contentType;
    /**
     * Name of the attachment.
     * Example: "attachment.pdf"
     */
    public string $fileName;
    /**
     * Id of the attachment.
     * Example: "7BE07D39-C7DA-4ED4-9F45-33BDB8643AA1"
     */
    public string $id;
    /**
     * Size of the attachment in bytes.
     * Example: 1024
     * Format: int32
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /**
     * URL of the attachment.
     * Example: "/email/1/templates/1000000000000000001/attachments/7BE07D39-C7DA-4ED4-9F45-33BDB8643AA1/download"
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
