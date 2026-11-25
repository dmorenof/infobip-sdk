<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberTemplateResponse
 *
 * Viber message template response containing template details and current status.
 */
final class ViberTemplateResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of template bodies per language containing the actual message text.
     */
    public \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\BodyCollection $body;
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateCategory $category;
    /**
     * Unix timestamp in milliseconds when the template was created.
     * Example: 1677628800000
     * Format: int64
     */
    public int $createdAt;
    /**
     * Unix timestamp in milliseconds when the template was last modified.
     * Example: 1677628800000
     * Format: int64
     */
    public int $lastModified;
    /**
     * Optional human-readable name for the template to help with identification.
     * Example: "Account Balance Notification"
     */
    public string $name;
    /**
     * List of variable parameters defined in the template.
     */
    public \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\ParamsCollection $params;
    /**
     * Sender for which the template is registered.
     * Example: "CompanyName"
     */
    public string $sender;
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateStatus $status;
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
            'body' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->body = new \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\BodyCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateBody::class)) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateCategory::from($value) : parent::assignMember($name, $value),
            'createdAt' => is_int($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'lastModified' => is_int($value) ? $this->lastModified = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'params' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->params = new \InfobipSDK\Collections\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateRequest\ParamsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateParam::class)) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateStatus::from($value) : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
