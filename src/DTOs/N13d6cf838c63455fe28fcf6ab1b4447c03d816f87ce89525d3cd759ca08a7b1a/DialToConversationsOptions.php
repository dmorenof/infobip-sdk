<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * DialToConversationsOptions
 */
final class DialToConversationsOptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'tags',
];

    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\TagIdentifierType $tagIdentifierType;
    /**
     * An array of [conversation tag](https://www.infobip.com/docs/conversations/get-to-know-conversations#tags-templates-and-tags) names or ids that are assigned to this conversation for better categorization of the topics or customer intent. Value can be an array of tag names/ids, empty array, or null value.
     */
    public \InfobipSDK\Collections\StringCollection $tags;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tagIdentifierType' => is_string($value) ? $this->tagIdentifierType = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\TagIdentifierType::from($value) : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
