<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd;

/**
 * TemplateResponse
 *
 * List of all templates for given sender.
 */
final class V1TemplateApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Business account ID to which template belongs.
     * Example: 222
     * Format: int64
     */
    public int $businessAccountId;
    /**
     * Category of the template.
     * Example: "ACCOUNT_UPDATE"
     */
    public \InfobipSDK\Enums\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplateApiResponse\CategoryEnum $category;
    /**
     * Template ID.
     * Example: "111"
     */
    public string $id;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language $language;
    /**
     * Name of the template.
     * Example: "template_name"
     */
    public string $name;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Status $status;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData $structure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessAccountId' => is_int($value) ? $this->businessAccountId = $value : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplateApiResponse\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Language::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\Status::from($value) : parent::assignMember($name, $value),
            'structure' => $value instanceof \stdClass ? $this->structure = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
