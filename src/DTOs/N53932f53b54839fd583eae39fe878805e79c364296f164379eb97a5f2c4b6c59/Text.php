<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Text
 */
final class Text extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Component
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'color' => [
        'pattern' => '^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$',
    ],
    'flex' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
    'maxLines' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action $action;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Alignment $align;
    /**
     * Font color. Use a hexadecimal color code.
     * Example: "#555555"
     */
    public string $color {
        set {
            $this->assigning('color', $value);
            $this->color = $value;
        }
    }
    /**
     * Span components used for decorated text within this component.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Text\ContentsCollection $contents;
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
     * Maximum number of lines. A value of 0 means no limit.
     * Example: 0
     * Format: int32
     */
    public int $maxLines {
        set {
            $this->assigning('maxLines', $value);
            $this->maxLines = $value;
        }
    }
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Size $size;
    /**
     * Text to display. Required unless contents is provided. Ignored by LINE when contents is set.
     * Example: "Hello, World!"
     */
    public string $text;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Weight $weight;
    /**
     * Whether the text wraps onto multiple lines.
     * Example: true
     */
    public bool $wrap;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'align' => is_string($value) ? $this->align = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Alignment::from($value) : parent::assignMember($name, $value),
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Gravity::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing::from($value) : parent::assignMember($name, $value),
            'maxLines' => is_int($value) ? $this->maxLines = $value : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Size::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'weight' => is_string($value) ? $this->weight = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Weight::from($value) : parent::assignMember($name, $value),
            'wrap' => is_bool($value) ? $this->wrap = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
