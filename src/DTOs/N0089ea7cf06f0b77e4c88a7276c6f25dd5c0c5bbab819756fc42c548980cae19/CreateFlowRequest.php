<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * CreateFlowRequest
 */
final class CreateFlowRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'categories',
    'name',
];

    protected const array VALIDATION = [
    'categories' => [
        'minItems' => 1,
    ],
    'name' => [
        'minLength' => 1,
        'maxLength' => 200,
    ],
];

    /**
     * Categories of the flow.
     * Example: "SIGN_UP"
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\CreateFlowRequest\CategoriesCollection $categories {
        set {
            $this->assigning('categories', $value);
            $this->categories = $value;
        }
    }
    /**
     * ID of source Flow to clone. The new flow with DRAFT status will inherit the flow.json from source flow.
     * Example: "987654"
     */
    public string $cloneFlowId;
    /**
     * Name of the flow.
     * Example: "My first flow"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cloneFlowId' => is_string($value) ? $this->cloneFlowId = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
