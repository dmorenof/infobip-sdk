<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * TemplateUpdateEvent
 */
final class TemplateUpdateEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'comment',
    'name',
    'templateStatus',
    'updatedAt',
];

    /**
     * Additional comment or notes about the update.
     * Example: "Approved for testing"
     */
    public string $comment;
    /**
     * Name of the template being updated.
     * Example: "demo_template"
     */
    public string $name;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\TemplateStatus $templateStatus;
    /**
     * Template's last update date and time. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2025-02-06T15:35:12.123+0000"
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'comment' => is_string($value) ? $this->comment = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'templateStatus' => is_string($value) ? $this->templateStatus = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\TemplateStatus::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
