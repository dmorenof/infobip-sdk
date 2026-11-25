<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * TagSimpleResponse
 *
 * Tags assigned to the article.
 */
final class TagSimpleResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'name',
];

    /**
     * Unique identifier of the tag.
     * Example: "c56a4180-65aa-42ec-a945-5fd21dec0538"
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the tag.
     * Example: "sms"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
