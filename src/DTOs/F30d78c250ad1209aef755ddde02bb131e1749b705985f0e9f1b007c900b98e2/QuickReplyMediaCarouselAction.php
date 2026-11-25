<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * QuickReplyMediaCarouselAction
 */
final class QuickReplyMediaCarouselAction extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveMediaCarouselAction
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'cards' => [
        'minItems' => 2,
        'maxItems' => 10,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Carousel cards. Should be defined in the correct order.It can have between two and ten cards.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\QuickReplyMediaCarouselAction\CardsCollection $cards {
        set {
            $this->assigning('cards', $value);
            $this->cards = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cards' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->cards = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\QuickReplyMediaCarouselAction\CardsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\QuickReplyMediaCarouselCard::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
