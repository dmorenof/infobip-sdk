<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * BaseSize
 *
 * Width and height of the base image in pixels.
 */
final class BaseSize extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'height',
        'width',
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
    ];

    /**
     * Height of the base image in pixels.
     * Example: 1040
     * Format: int32
     */
    public int $height {
        set {
            $this->assigning('height', $value);
            $this->height = $value;
        }
    }
    /**
     * Width of the base image in pixels.
     * Example: 1040
     * Format: int32
     */
    public int $width {
        set {
            $this->assigning('width', $value);
            $this->width = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'height' => is_int($value) ? $this->height = $value : parent::assignMember($name, $value),
            'width' => is_int($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
