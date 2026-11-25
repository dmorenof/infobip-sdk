<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * CommentCreateUpdateRequest
 */
final class CommentCreateUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
];

    protected const array VALIDATION = [
    'content' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    /**
     * Content of the comment.
     * Example: "Please review the second paragraph for accuracy."
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
