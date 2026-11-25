<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * LiveChatCarouselMessageContent
 */
final class LiveChatCarouselMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatPublicMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatCarouselMessageContent\CardsCollection $cards;
    public \InfobipSDK\Collections\StringCollection $quickReplies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cards' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cards = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatCarouselMessageContent\CardsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatCarouselCard::class)) : parent::assignMember($name, $value),
            'quickReplies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->quickReplies = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
