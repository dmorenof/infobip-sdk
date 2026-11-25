<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Text
 */
final class Text extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Component
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'flex' => [
        'minimum' => 0,
        'maximum' => 20,
        'format' => 'int32',
    ],
    'maxLines' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Action $action;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Alignment $align;
    /**
     * Font color as a hexadecimal color code.
     */
    public string $color;
    /**
     * Spans that make up the text, taking precedence over text when both are set.
     */
    public \InfobipSDK\Collections\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Text\ContentsCollection $contents;
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
    /**
     * Minimum amount of space before this component in its parent container.
     */
    public string $margin;
    /**
     * Maximum number of lines to display, where 0 displays the entire text and anything longer ends in an ellipsis.
     * Format: int32
     */
    public int $maxLines {
        set {
            $this->assigning('maxLines', $value);
            $this->maxLines = $value;
        }
    }
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
    /**
     * Font size, either a keyword such as xs, sm, md, lg or xl, or a value in pixels.
     */
    public string $size;
    /**
     * Text to display. Ignored when contents is set.
     */
    public string $text;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Weight $weight;
    /**
     * Whether the text wraps onto multiple lines.
     */
    public bool $wrap;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'align' => is_string($value) ? $this->align = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Alignment::from($value) : parent::assignMember($name, $value),
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Gravity::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = $value : parent::assignMember($name, $value),
            'maxLines' => is_int($value) ? $this->maxLines = $value : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position::from($value) : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'weight' => is_string($value) ? $this->weight = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Weight::from($value) : parent::assignMember($name, $value),
            'wrap' => is_bool($value) ? $this->wrap = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
