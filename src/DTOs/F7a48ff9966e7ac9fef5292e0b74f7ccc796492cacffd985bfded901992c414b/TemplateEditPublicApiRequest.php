<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b;

/**
 * TemplateEditRequest
 */
final class TemplateEditPublicApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Category of the template. Approved template category cannot be edited.
     * Example: "MARKETING"
     */
    public \InfobipSDK\Enums\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateEditPublicApiRequest\CategoryEnum $category;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Platform $platform;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\EditStructure $structure;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\EditSubCategory $subCategory;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\EditValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\F7a48ff9966e7ac9fef5292e0b74f7ccc796492cacffd985bfded901992c414b\TemplateEditPublicApiRequest\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Platform($value) : parent::assignMember($name, $value),
            'subCategory' => is_string($value) ? $this->subCategory = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\EditSubCategory::from($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\EditValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
