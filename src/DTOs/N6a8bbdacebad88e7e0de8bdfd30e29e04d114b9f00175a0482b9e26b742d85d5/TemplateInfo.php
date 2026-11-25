<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * TemplateInfo
 *
 * Information about a ZNS message template.
 */
final class TemplateInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Human readable name of the template.
     */
    public string $displayName;
    /**
     * Path to the template preview.
     */
    public string $previewUrl;
    /**
     * Reason for current template status.
     */
    public string $reason;
    /**
     * Template status. Possible values: `PENDING_REVIEW`, `DISABLE`, `ENABLE`, `REJECT`.
     */
    public string $status;
    /**
     * List of template buttons.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateInfo\TemplateButtonsCollection $templateButtons;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZbsTemplateContent $templateContent;
    /**
     * Name identifying the template. Must be the same as registered template_id.
     * Format: int64
     */
    public int $templateName;
    /**
     * List of template properties.
     */
    public \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateInfo\TemplatePropertiesCollection $templateProperties;
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateTag $templateTag;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'previewUrl' => is_string($value) ? $this->previewUrl = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'templateButtons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->templateButtons = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateInfo\TemplateButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateButton::class)) : parent::assignMember($name, $value),
            'templateName' => is_int($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            'templateProperties' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->templateProperties = new \InfobipSDK\Collections\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateInfo\TemplatePropertiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateProperty::class)) : parent::assignMember($name, $value),
            'templateTag' => is_string($value) ? $this->templateTag = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateTag::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
