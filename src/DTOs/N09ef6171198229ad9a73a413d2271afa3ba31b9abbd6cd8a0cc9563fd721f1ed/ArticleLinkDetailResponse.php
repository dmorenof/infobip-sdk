<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * ArticleLinkDetailResponse
 *
 * List of Articles Or Attachments linked to the article.
 */
final class ArticleLinkDetailResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'name',
    'type',
];

    /**
     * Unique identifier of the linked article or attachment.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the linked article or attachment.
     * Example: "API Reference Guide.pdf"
     */
    public string $name;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\InternalType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\InternalType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
