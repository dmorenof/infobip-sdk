<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTemplateInnerCardContent
 *
 * An array of cards contained within the carousel.
 */
final class RcsTemplateInnerCardContent extends \Dmorenof\SdkRuntime\DTO
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
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CardMedia $media;
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateInnerCardContent\SuggestionsCollection $suggestions {
        set {
            $this->assigning('suggestions', $value);
            $this->suggestions = $value;
        }
    }
    /**
     * Title of the card, displayed as bolded text.
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
            'media' => $value instanceof \stdClass ? $this->media = new \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CardMedia($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
