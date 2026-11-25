<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * TemplateUpdatePushEvent
 */
final class TemplateUpdatePushEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'change',
    'messageTemplateId',
    'messageTemplateLanguage',
    'messageTemplateName',
    'timestamp',
];

    /**
     * Application ID.
     * Example: 1234567
     * Format: int64
     */
    public int $applicationId;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatePushEventChange $change;
    /**
     * Entity ID.
     * Example: 123456
     * Format: int64
     */
    public int $entityId;
    /**
     * Template ID.
     * Example: "111"
     */
    public string $messageTemplateId;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language $messageTemplateLanguage;
    /**
     * Name of the template.
     * Example: "template_name"
     */
    public string $messageTemplateName;
    /**
     * Date and time when event occurred. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_int($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'entityId' => is_int($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'messageTemplateId' => is_string($value) ? $this->messageTemplateId = $value : parent::assignMember($name, $value),
            'messageTemplateLanguage' => is_string($value) ? $this->messageTemplateLanguage = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language::from($value) : parent::assignMember($name, $value),
            'messageTemplateName' => is_string($value) ? $this->messageTemplateName = $value : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
