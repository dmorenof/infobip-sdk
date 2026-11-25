<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * UpdateTreeNodeRequest
 */
final class UpdateTreeNodeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 40,
    ],
];

    /**
     * New non-blank name of the tree node.
     * Example: "Getting Started"
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
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
