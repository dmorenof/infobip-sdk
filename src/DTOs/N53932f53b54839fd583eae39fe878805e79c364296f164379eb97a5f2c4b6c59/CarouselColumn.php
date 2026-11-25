<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * CarouselColumn
 *
 * Carousel columns.
 */
final class CarouselColumn extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'actions',
    'text',
];

    protected const array VALIDATION = [
    'actions' => [
        'minItems' => 1,
        'maxItems' => 3,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 120,
    ],
    'thumbnailImageUrl' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
    'title' => [
        'minLength' => 0,
        'maxLength' => 40,
    ],
];

    /**
     * Action buttons shown in the column.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ButtonsLineTemplatePayload\ActionsCollection $actions {
        set {
            $this->assigning('actions', $value);
            $this->actions = $value;
        }
    }
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action $defaultAction;
    /**
     * Background color of the thumbnail image as a hex color.
     * Example: "#FFFFFF"
     */
    public string $imageBackgroundColor;
    /**
     * Message text displayed in the column.
     * Example: "Description of item 1"
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL of the column thumbnail image.
     * Example: "https://example.com/carousel-1.jpg"
     */
    public string $thumbnailImageUrl {
        set {
            $this->assigning('thumbnailImageUrl', $value);
            $this->thumbnailImageUrl = $value;
        }
    }
    /**
     * Title displayed in the column.
     * Example: "Item 1"
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
            'imageBackgroundColor' => is_string($value) ? $this->imageBackgroundColor = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailImageUrl' => is_string($value) ? $this->thumbnailImageUrl = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
