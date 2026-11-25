<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * DefaultTemplateApiResponse
 */
final class DefaultTemplateApiResponse extends \InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateApiResponse
{
    public const array REQUIRED_FIELDS = [
    'structure',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Subcategory of the template. Subcategories are used to further classify templates. Currently used only to distinguish ORDER_STATUS template which can be used only with UTILITY category.
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateApiResponse\SubCategoryEnum $subCategory;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subCategory' => is_string($value) ? $this->subCategory = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateApiResponse\SubCategoryEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
