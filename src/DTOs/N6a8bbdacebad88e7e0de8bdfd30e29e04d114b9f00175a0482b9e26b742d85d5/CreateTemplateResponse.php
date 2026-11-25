<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * CreateTemplateResponse
 *
 * Response from Zalo API after creating a ZBS template.
 */
final class CreateTemplateResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'templateType',
];

    /**
     * Application ID associated with the template.
     */
    public string $appId;
    /**
     * Official Account ID that owns the template.
     */
    public string $oaId;
    /**
     * URL to preview the template in Zalo's interface.
     */
    public string $previewUrl;
    /**
     * Current status of the template.
     */
    public string $status;
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateTag $tag;
    /**
     * Unique identifier for the created template.
     */
    public string $templateId;
    /**
     * Name of the template.
     */
    public string $templateName;
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZbsTemplateType $templateType;
    /**
     * Template timeout.
     * Format: int64
     */
    public int $timeout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appId' => is_string($value) ? $this->appId = $value : parent::assignMember($name, $value),
            'oaId' => is_string($value) ? $this->oaId = $value : parent::assignMember($name, $value),
            'previewUrl' => is_string($value) ? $this->previewUrl = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'tag' => is_string($value) ? $this->tag = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateTag::from($value) : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            'templateType' => is_string($value) ? $this->templateType = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZbsTemplateType::from($value) : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
