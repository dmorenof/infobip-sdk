<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ImageCarouselColumn
 *
 * Image carousel columns.
 */
final class ImageCarouselColumn extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'imageUrl',
];

    protected const array VALIDATION = [
    'imageUrl' => [
        'minLength' => 0,
        'maxLength' => 1000,
    ],
];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action $action;
    /**
     * URL of the image displayed in the column.
     * Example: "https://example.com/image-carousel.jpg"
     */
    public string $imageUrl {
        set {
            $this->assigning('imageUrl', $value);
            $this->imageUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
