<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Icon
 */
final class Icon extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Component
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
    ],
];

    /**
     * Aspect ratio of the icon, expressed as width:height.
     * Example: "1:1"
     */
    public string $aspectRatio;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing $margin;
    /**
     * Bottom offset from the reference position.
     * Example: "0px"
     */
    public string $offsetBottom;
    /**
     * End offset from the reference position.
     * Example: "0px"
     */
    public string $offsetEnd;
    /**
     * Start offset from the reference position.
     * Example: "0px"
     */
    public string $offsetStart;
    /**
     * Top offset from the reference position.
     * Example: "0px"
     */
    public string $offsetTop;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Position $position;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Size $size;
    /**
     * URL of the icon image.
     * Example: "https://example.com/icon.png"
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aspectRatio' => is_string($value) ? $this->aspectRatio = $value : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing::from($value) : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Position::from($value) : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Size::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
