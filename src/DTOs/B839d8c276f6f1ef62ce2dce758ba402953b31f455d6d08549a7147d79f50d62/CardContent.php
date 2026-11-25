<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CardContent
 *
 * Object containing contents of an RCS card. Must contain media or title to be valid.
 */
final class CardContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'description' => [
        'minLength' => 1,
        'maxLength' => 2000,
    ],
    'suggestions' => [
        'minItems' => 0,
        'maxItems' => 4,
    ],
    'title' => [
        'minLength' => 1,
        'maxLength' => 200,
    ],
];

    /**
     * Description of the card, displayed as regular text.
     * Example: "Some supercool, attention-grabbing description"
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardMedia $media;
    /**
     * List of button suggestions that will be sent in card.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardContent\SuggestionsCollection $suggestions {
        set {
            $this->assigning('suggestions', $value);
            $this->suggestions = $value;
        }
    }
    /**
     * Title of the card, displayed as bolded text.
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
            'media' => $value instanceof \stdClass ? $this->media = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CardMedia($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
