<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Box
 *
 * Footer box of the bubble.
 */
final class Box extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'contents',
    'layout',
    'type',
];

    protected const array VALIDATION = [
    'contents' => [
        'minItems' => 1,
    ],
    'flex' => [
        'minimum' => 0,
        'maximum' => 10,
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action $action;
    /**
     * Background color of the box. Use a hexadecimal color code.
     * Example: "#FFFFFF"
     */
    public string $backgroundColor;
    /**
     * Border color of the box. Use a hexadecimal color code.
     * Example: "#E0E0E0"
     */
    public string $borderColor;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BorderWidth $borderWidth;
    /**
     * Child components contained in the box.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Box\ContentsCollection $contents {
        set {
            $this->assigning('contents', $value);
            $this->contents = $value;
        }
    }
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing $cornerRadius;
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
    /**
     * Height of the box.
     * Example: "100px"
     */
    public string $height;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BoxLayout $layout;
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
    /**
     * Padding for all sides of the box.
     * Example: "MD"
     */
    public string $paddingAll;
    /**
     * Bottom padding of the box.
     * Example: "MD"
     */
    public string $paddingBottom;
    /**
     * End padding of the box.
     * Example: "MD"
     */
    public string $paddingEnd;
    /**
     * Start padding of the box.
     * Example: "MD"
     */
    public string $paddingStart;
    /**
     * Top padding of the box.
     * Example: "MD"
     */
    public string $paddingTop;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Position $position;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing $spacing;
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ComponentType $type;
    /**
     * Width of the box.
     * Example: "100px"
     */
    public string $width;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'borderColor' => is_string($value) ? $this->borderColor = $value : parent::assignMember($name, $value),
            'borderWidth' => is_string($value) ? $this->borderWidth = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BorderWidth::from($value) : parent::assignMember($name, $value),
            'contents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contents = new \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Box\ContentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Component::class)) : parent::assignMember($name, $value),
            'cornerRadius' => is_string($value) ? $this->cornerRadius = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing::from($value) : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = $value : parent::assignMember($name, $value),
            'layout' => is_string($value) ? $this->layout = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\BoxLayout::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing::from($value) : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'paddingAll' => is_string($value) ? $this->paddingAll = $value : parent::assignMember($name, $value),
            'paddingBottom' => is_string($value) ? $this->paddingBottom = $value : parent::assignMember($name, $value),
            'paddingEnd' => is_string($value) ? $this->paddingEnd = $value : parent::assignMember($name, $value),
            'paddingStart' => is_string($value) ? $this->paddingStart = $value : parent::assignMember($name, $value),
            'paddingTop' => is_string($value) ? $this->paddingTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Position::from($value) : parent::assignMember($name, $value),
            'spacing' => is_string($value) ? $this->spacing = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Spacing::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ComponentType::from($value) : parent::assignMember($name, $value),
            'width' => is_string($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
