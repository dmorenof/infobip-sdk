<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * DocumentRequirementSpec
 */
final class DocumentRequirementSpec extends \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RequirementSpec
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Attachment $attachment;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Category $category;
    /**
     * Description of the requirement.
     */
    public string $description;
    /**
     * Key of the requirement.
     */
    public string $key;
    /**
     * Flag that indicates if multiple values can be provided.
     */
    public bool $multipleValuesSupported;
    /**
     * Name of the requirement.
     */
    public string $name;
    /**
     * Flag that indicates if the requirement is required.
     */
    public bool $required;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachment' => $value instanceof \stdClass ? $this->attachment = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Attachment($value) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Category::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'multipleValuesSupported' => is_bool($value) ? $this->multipleValuesSupported = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
