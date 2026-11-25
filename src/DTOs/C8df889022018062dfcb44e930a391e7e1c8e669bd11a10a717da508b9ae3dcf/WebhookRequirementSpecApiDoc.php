<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * WebhookRequirementSpecApiDoc
 *
 * Additional requirements for this resource request, on top of the requirements returned by the requirements lookup, for example prefilled documents that need your action. Provide them in `requirements` when updating the resource request.
 */
final class WebhookRequirementSpecApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookAttachmentApiDoc $attachment;
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
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FieldType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachment' => $value instanceof \stdClass ? $this->attachment = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookAttachmentApiDoc($value) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Category::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'multipleValuesSupported' => is_bool($value) ? $this->multipleValuesSupported = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FieldType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
