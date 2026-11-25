<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * CardContent
 *
 * A list of cards within the carousel.
 */
final class CardContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'description',
];

    protected const array VALIDATION = [
    'cardActions' => [
        'minItems' => 0,
        'maxItems' => 4,
    ],
    'description' => [
        'minLength' => 1,
        'maxLength' => 2000,
    ],
    'title' => [
        'minLength' => 1,
        'maxLength' => 200,
    ],
];

    /**
     * List of buttons displayed on the card.
     */
    public \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\CardContent\CardActionsCollection $cardActions {
        set {
            $this->assigning('cardActions', $value);
            $this->cardActions = $value;
        }
    }
    /**
     * Card description, displayed as regular text.
     * Example: "Some super cool, attention-grabbing description"
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Card image URL.
     * Example: "https://www.infobip.com/infobip-logo.png"
     */
    public string $imageUrl;
    /**
     * Card title, displayed as bold text.
     * Example: "Card title"
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
