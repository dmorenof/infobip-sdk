<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * AddTagToConversationApiRequest
 * Example: {"tagName":"Tag Name"}
 */
final class AddTagToConversationApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'tagName',
    ];

    protected const array VALIDATION = [
        'tagName' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
    ];

    /**
     * Tag name identifier.
     */
    public string $tagName {
        set {
            $this->assigning('tagName', $value);
            $this->tagName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tagName' => is_string($value) ? $this->tagName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
