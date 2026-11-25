<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineImage
 */
final class LineImage extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Component
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'backgroundColor' => [
        'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
    ],
    'flex' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
    'url' => [
        'minLength' => 1,
    ],
];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action $action;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Alignment $align;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\AspectMode $aspectMode;
    /**
     * Aspect ratio of the image, expressed as width:height.
     * Example: "20:13"
     */
    public string $aspectRatio;
    /**
     * Background color shown behind the image. Use a hexadecimal color code.
     * Example: "#FFFFFF"
     */
    public string $backgroundColor {
        set {
            $this->assigning('backgroundColor', $value);
            $this->backgroundColor = $value;
        }
    }
    /**
     * Ratio of the width or height of this component within the parent box.
     * Example: 1
     * Format: int32
     */
    public int $flex {
        set {
            $this->assigning('flex', $value);
            $this->flex = $value;
        }
    }
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Gravity $gravity;
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
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ComponentImageSize $size;
    /**
     * URL of the image file.
     * Example: "https://example.com/image.jpg"
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
            'align' => is_string($value) ? $this->align = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Alignment::from($value) : parent::assignMember($name, $value),
            'aspectMode' => is_string($value) ? $this->aspectMode = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\AspectMode::from($value) : parent::assignMember($name, $value),
            'aspectRatio' => is_string($value) ? $this->aspectRatio = $value : parent::assignMember($name, $value),
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Gravity::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing::from($value) : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Position::from($value) : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ComponentImageSize::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
