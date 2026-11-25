<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * DefaultTemplatePublicApiRequest
 */
final class DefaultTemplatePublicApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'category',
        'language',
        'name',
        'structure',
    ];

    protected const array VALIDATION = [
        'category' => [
            'minLength' => 1,
        ],
        'name' => [
            'minLength' => 1,
            'pattern' => '^[a-z0-9_]{1,512}$',
        ],
    ];

    /**
     * Category of the template. Mind that each category has different fields available for the endpoint. If you're sending traffic in India, for `AUTHENTICATION`, use fields available for `UTILITY` with `AUTHENTICATION` as category. Note that category of the template can be automatically changed by Meta.
     * Example: "MARKETING"
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplatePublicApiRequest\CategoryEnum $category {
        set {
            $this->assigning('category', $value);
            $this->category = $value;
        }
    }
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language $language;
    /**
     * Template name. Must only contain lowercase alphanumeric characters and underscores.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Platform $platform;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateStructureApiData $structure;
    /**
     * Subcategory of the template. Subcategories are used to further classify templates. Currently used only to distinguish ORDER_STATUS template which can be used only with UTILITY category.
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplatePublicApiRequest\SubCategoryEnum $subCategory;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ValidityPeriodApiData $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplatePublicApiRequest\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Platform($value) : parent::assignMember($name, $value),
            'structure' => $value instanceof \stdClass ? $this->structure = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateStructureApiData($value) : parent::assignMember($name, $value),
            'subCategory' => is_string($value) ? $this->subCategory = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplatePublicApiRequest\SubCategoryEnum::from($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ValidityPeriodApiData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
