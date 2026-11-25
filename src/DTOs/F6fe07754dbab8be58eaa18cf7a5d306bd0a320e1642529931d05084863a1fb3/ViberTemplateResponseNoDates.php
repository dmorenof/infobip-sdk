<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3;

/**
 * ViberTemplateResponseNoDates
 *
 * Viber message template response containing template details and current status.
 */
final class ViberTemplateResponseNoDates extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of template bodies per language containing the actual message text.
     */
    public \InfobipSDK\Collections\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\ViberTemplateResponseNoDates\BodyCollection $body;
    public \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateCategory $category;
    /**
     * Human-readable name of the template. Must be unique per sender.
     * Example: "Account Balance Notification"
     */
    public string $name;
    /**
     * List of variable parameters defined in the template.
     */
    public \InfobipSDK\Collections\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\ViberTemplateResponseNoDates\ParamsCollection $params;
    /**
     * Sender for which the template is registered.
     * Example: "CompanyName"
     */
    public string $sender;
    public \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateStatus $status;
    /**
     * Unique identifier of the template.
     * Example: "00000000-0000-0000-0000-000000000000"
     */
    public string $templateId;
    /**
     * Template version number.
     * Example: "1"
     */
    public string $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->body = new \InfobipSDK\Collections\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\ViberTemplateResponseNoDates\BodyCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateBody::class)) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateCategory::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'params' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->params = new \InfobipSDK\Collections\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\ViberTemplateResponseNoDates\ParamsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateParam::class)) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateStatus::from($value) : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
