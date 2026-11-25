<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundCarouselContent
 */
final class LiveChatOutboundCarouselContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'cards' => [
            'minItems' => 2,
            'maxItems' => 10,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * A list of cards within the carousel.
     */
    public \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundCarouselContent\CardsCollection $cards {
        set {
            $this->assigning('cards', $value);
            $this->cards = $value;
        }
    }
    /**
     * A list of suggested actions independent from the cards.
     */
    public \InfobipSDK\Collections\StringCollection $quickReplies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cards' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cards = new \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundCarouselContent\CardsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\CardContent::class)) : parent::assignMember($name, $value),
            'quickReplies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->quickReplies = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
