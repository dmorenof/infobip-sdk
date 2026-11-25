<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8cb345d2b2e2a0cd5a7383bf2012768938eaa465c6e4f6554958ac7f4a58aa3f;

/**
 * TemplateRequest
 */
final class V1TemplatePublicApiRequest extends \Dmorenof\SdkRuntime\DTO
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
     * All listed categories will be available until May 1, 2023.
     * Example: "ACCOUNT_UPDATE"
     */
    public \InfobipSDK\Enums\N8cb345d2b2e2a0cd5a7383bf2012768938eaa465c6e4f6554958ac7f4a58aa3f\V1TemplatePublicApiRequest\CategoryEnum $category {
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
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData $structure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\N8cb345d2b2e2a0cd5a7383bf2012768938eaa465c6e4f6554958ac7f4a58aa3f\V1TemplatePublicApiRequest\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'structure' => $value instanceof \stdClass ? $this->structure = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
