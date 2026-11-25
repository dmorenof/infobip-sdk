<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * TemplatePushEventChange
 *
 * Change that has been applied to template.
 */
class TemplatePushEventChange extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'TEMPLATE_CATEGORY_UPDATE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplateCategoryPushEventChange',
    'TEMPLATE_QUALITY_UPDATE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplateQualityPushEventChange',
    'TEMPLATE_STATUS_UPDATE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplateStatusPushEventChange',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.TemplateCategoryPushEventChange' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplateCategoryPushEventChange',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.TemplateQualityPushEventChange' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplateQualityPushEventChange',
    'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.TemplateStatusPushEventChange' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\TemplateStatusPushEventChange',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Type of change that has been applied to template.
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatePushEventChange\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\TemplatePushEventChange\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
