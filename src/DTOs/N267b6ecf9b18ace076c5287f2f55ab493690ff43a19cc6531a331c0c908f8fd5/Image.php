<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Image
 *
 * Component that displays an image.
 */
final class Image extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    protected const array VALIDATION = [
        'flex' => [
            'minimum' => 0,
            'maximum' => 20,
            'format' => 'int32',
        ],
        'url' => [
            'minLength' => 1,
        ],
    ];

    public \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Action $action;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Alignment $align;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\AspectMode $aspectMode;
    /**
     * Aspect ratio of the image, in width:height format.
     */
    public string $aspectRatio;
    /**
     * Background color of the image as a hexadecimal color code.
     */
    public string $backgroundColor;
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
     * Maximum width of the image, either a keyword such as xs, sm, md, lg or xl, or a value in pixels or as a percentage.
     */
    public string $size;
    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ComponentType $type;
    /**
     * URL of the image. Must use HTTPS and point to a JPEG or PNG file.
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
            'align' => is_string($value) ? $this->align = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Alignment::from($value) : parent::assignMember($name, $value),
            'aspectMode' => is_string($value) ? $this->aspectMode = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\AspectMode::from($value) : parent::assignMember($name, $value),
            'aspectRatio' => is_string($value) ? $this->aspectRatio = $value : parent::assignMember($name, $value),
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            'gravity' => is_string($value) ? $this->gravity = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Gravity::from($value) : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = $value : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position::from($value) : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ComponentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
