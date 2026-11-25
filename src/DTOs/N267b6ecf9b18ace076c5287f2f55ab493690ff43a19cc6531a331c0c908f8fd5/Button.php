<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Button
 */
final class Button extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Component
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'flex' => [
        'minimum' => 0,
        'maximum' => 20,
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Action $action;
    /**
     * Text color when the style is link, or background color when the style is primary or secondary, as a hexadecimal color code.
     */
    public string $color;
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
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Gravity $gravity;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Height $height;
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
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position $position;
    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Style $style;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Gravity::from($value) : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Height::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = $value : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position::from($value) : parent::assignMember($name, $value),
            'style' => $value instanceof \stdClass ? $this->style = new \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Style($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
