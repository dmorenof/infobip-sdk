<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Icon
 */
final class Icon extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Component
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'url' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Aspect ratio of the icon, in width:height format.
     */
    public string $aspectRatio;
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
     * Size of the icon, either a keyword such as xs, sm, md, lg or xl, or a value in pixels.
     */
    public string $size;
    /**
     * URL of the icon image. Must use HTTPS and point to a JPEG or PNG file.
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
            'margin' => is_string($value) ? $this->margin = $value : parent::assignMember($name, $value),
            'offsetBottom' => is_string($value) ? $this->offsetBottom = $value : parent::assignMember($name, $value),
            'offsetEnd' => is_string($value) ? $this->offsetEnd = $value : parent::assignMember($name, $value),
            'offsetStart' => is_string($value) ? $this->offsetStart = $value : parent::assignMember($name, $value),
            'offsetTop' => is_string($value) ? $this->offsetTop = $value : parent::assignMember($name, $value),
            'position' => is_string($value) ? $this->position = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Position::from($value) : parent::assignMember($name, $value),
            'size' => is_string($value) ? $this->size = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
