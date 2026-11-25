<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Box
 *
 * Component that lays out other components horizontally, vertically or along a baseline.
 */
final class Box extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'layout',
    ];

    protected const array VALIDATION = [
        'flex' => [
            'minimum' => 0,
            'maximum' => 20,
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Action $action;
    /**
     * Background color of the box as a hexadecimal color code, optionally including an alpha channel.
     */
    public string $backgroundColor;
    /**
     * Color of the box border as a hexadecimal color code.
     */
    public string $borderColor;
    /**
     * Width of the box border, either a keyword such as none, light, normal, medium, semi-bold or bold, or a value in pixels.
     */
    public string $borderWidth;
    /**
     * Components contained in this box.
     */
    public \InfobipSDK\Collections\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Box\ContentsCollection $contents;
    /**
     * Radius used when rounding the corners of the border, either a keyword such as none, xs, sm, md, lg, xl or xxl, or a value in pixels.
     */
    public string $cornerRadius;
    /**
     * Ratio of the width or height of this component within the parent box.
     * Format: int32
     */
    public int $flex {
        set {
            $this->assigning('flex', $value);
            $this->flex = $value;
        }
    }
    /**
     * Height of the box, either a value in pixels or a percentage of the height of the parent element.
     */
    public string $height;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BoxLayout $layout;
    /**
     * Minimum amount of space before this component in its parent container.
     */
    public string $margin;
    /**
     * Offset from the bottom, applied relative to the reference given by position.
     */
    public string $offsetBottom;
    /**
     * Offset from the end, applied relative to the reference given by position.
     */
    public string $offsetEnd;
    /**
     * Offset from the start, applied relative to the reference given by position.
     */
    public string $offsetStart;
    /**
     * Offset from the top, applied relative to the reference given by position.
     */
    public string $offsetTop;
    /**
     * Free space between the borders of this box and its child elements.
     */
    public string $paddingAll;
    /**
     * Free space between the lower border of this box and the lower end of its child elements.
     */
    public string $paddingBottom;
    /**
     * Free space between the end border of this box and the end of its child elements, on the right for left-to-right text.
     */
    public string $paddingEnd;
    /**
     * Free space between the start border of this box and the start of its child elements, on the left for left-to-right text.
     */
    public string $paddingStart;
    /**
     * Free space between the upper border of this box and the upper end of its child elements.
     */
    public string $paddingTop;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position $position;
    /**
     * Minimum amount of space between the components in this box.
     */
    public string $spacing;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ComponentType $type;
    /**
     * Width of the box, either a value in pixels or a percentage of the width of the parent element.
     */
    public string $width;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'borderColor' => is_string($value) ? $this->borderColor = $value : parent::assignMember($name, $value),
            'borderWidth' => is_string($value) ? $this->borderWidth = $value : parent::assignMember($name, $value),
            'contents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->contents = new \InfobipSDK\Collections\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Box\ContentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Component::class)) : parent::assignMember($name, $value),
            'cornerRadius' => is_string($value) ? $this->cornerRadius = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = $value : parent::assignMember($name, $value),
            'layout' => is_string($value) ? $this->layout = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\BoxLayout::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = $value : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'paddingAll' => is_string($value) ? $this->paddingAll = $value : parent::assignMember($name, $value),
            'paddingBottom' => is_string($value) ? $this->paddingBottom = $value : parent::assignMember($name, $value),
            'paddingEnd' => is_string($value) ? $this->paddingEnd = $value : parent::assignMember($name, $value),
            'paddingStart' => is_string($value) ? $this->paddingStart = $value : parent::assignMember($name, $value),
            'paddingTop' => is_string($value) ? $this->paddingTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position::from($value) : parent::assignMember($name, $value),
            'spacing' => is_string($value) ? $this->spacing = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ComponentType::from($value) : parent::assignMember($name, $value),
            'width' => is_string($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
