<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * Area
 *
 * Area on the imagemap where the video is displayed. Required by LINE for the video to render.
 */
final class Area extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'height',
    'width',
    'x',
    'y',
];

    protected const array VALIDATION = [
    'height' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'width' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'x' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'y' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
];

    /**
     * Height of the tappable area in pixels.
     * Example: 520
     * Format: int32
     */
    public int $height {
        set {
            $this->assigning('height', $value);
            $this->height = $value;
        }
    }
    /**
     * Width of the tappable area in pixels.
     * Example: 520
     * Format: int32
     */
    public int $width {
        set {
            $this->assigning('width', $value);
            $this->width = $value;
        }
    }
    /**
     * Horizontal offset of the tappable area from the left edge, in pixels.
     * Example: 0
     * Format: int32
     */
    public int $x {
        set {
            $this->assigning('x', $value);
            $this->x = $value;
        }
    }
    /**
     * Vertical offset of the tappable area from the top edge, in pixels.
     * Example: 0
     * Format: int32
     */
    public int $y {
        set {
            $this->assigning('y', $value);
            $this->y = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            'x' => is_int($value) ? $this->x = $value : parent::assignMember($name, $value),
            'y' => is_int($value) ? $this->y = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
