<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0;

/**
 * EmailTemplateListItem
 */
final class EmailTemplateListItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    /**
     * Date and time when the email template was created. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Unique identifier of the email template.
     * Example: 1000000000000000001
     * Format: int64
     */
    public int $id;
    /**
     * Image preview URL
     * Example: "/email/1/templates/1000000000000000001/preview.png"
     */
    public string $imagePreviewUrl;
    /**
     * Name of the email template.
     * Example: "Welcome email"
     */
    public string $name;
    /**
     * Date and time when the email template was last updated. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'imagePreviewUrl' => is_string($value) ? $this->imagePreviewUrl = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
