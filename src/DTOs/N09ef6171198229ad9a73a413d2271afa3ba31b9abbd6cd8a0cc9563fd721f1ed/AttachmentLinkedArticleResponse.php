<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * AttachmentLinkedArticleResponse
 */
final class AttachmentLinkedArticleResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'articleId',
    ];

    /**
     * Unique identifier of the linked article.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $articleId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'articleId' => is_string($value) ? $this->articleId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
