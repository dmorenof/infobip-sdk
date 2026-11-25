<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b;

/**
 * TemplateResponse
 *
 * The list of the results for this page.
 */
class TemplateApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'structure',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'category';
    public const array DISCRIMINATOR_MAPPING = [
    'AUTHENTICATION' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\AuthenticationTemplateApiResponse',
    'MARKETING' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\DefaultMarketingTemplateApiResponse',
    'UTILITY' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\DefaultTemplateApiResponse',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.AuthenticationTemplateApiResponse' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\AuthenticationTemplateApiResponse',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.DefaultMarketingTemplateApiResponse' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\DefaultMarketingTemplateApiResponse',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.DefaultTemplateApiResponse' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\DefaultTemplateApiResponse',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Business account ID to which template belongs.
     * Example: 222
     * Format: int64
     */
    public int $businessAccountId;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\WhatsAppCategory $category;
    /**
     * Creation date of the template.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Template ID.
     * Example: "111"
     */
    public string $id;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language $language;
    /**
     * Last update date of the template.
     * Format: date-time
     */
    public string $lastUpdatedAt;
    /**
     * Name of the library template from which this template was created. If not present, the template was not created using the template library.
     */
    public string $libraryTemplateName;
    /**
     * Name of the template.
     * Example: "template_name"
     */
    public string $name;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Platform $platform;
    /**
     * Quality of the template.
     * Example: "HIGH"
     */
    public \InfobipSDK\Enums\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse\QualityEnum $quality;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Status $status;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateStructureApiData $structure;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ValidityPeriodApiData $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessAccountId' => is_int($value) ? $this->businessAccountId = $value : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\WhatsAppCategory::from($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language::from($value) : parent::assignMember($name, $value),
            'lastUpdatedAt' => is_string($value) ? $this->lastUpdatedAt = $value : parent::assignMember($name, $value),
            'libraryTemplateName' => is_string($value) ? $this->libraryTemplateName = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Platform($value) : parent::assignMember($name, $value),
            'quality' => is_string($value) ? $this->quality = \InfobipSDK\Enums\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse\QualityEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Status::from($value) : parent::assignMember($name, $value),
            'structure' => $value instanceof \stdClass ? $this->structure = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateStructureApiData($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ValidityPeriodApiData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
