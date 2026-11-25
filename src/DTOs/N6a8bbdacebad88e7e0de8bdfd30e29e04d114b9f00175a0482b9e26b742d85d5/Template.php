<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Template
 *
 * ZNS message template.
 */
final class Template extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Template creation date. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $createdTime;
    /**
     * Human readable name of the template.
     */
    public string $displayName;
    /**
     * Template status. Possible values: `PENDING_REVIEW`, `DISABLE`, `ENABLE`, `REJECT`.
     */
    public string $status;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZbsTemplateContent $templateContent;
    /**
     * Name identifying the template. Is the same as registered template_id.
     * Format: int64
     */
    public int $templateName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdTime' => is_string($value) ? $this->createdTime = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'templateName' => is_int($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
