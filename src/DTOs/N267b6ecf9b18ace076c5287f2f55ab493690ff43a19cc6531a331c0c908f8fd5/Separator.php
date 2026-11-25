<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Separator
 */
final class Separator extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Component
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Color of the separator as a hexadecimal color code.
     */
    public string $color;
    /**
     * Minimum amount of space before this component in its parent container.
     */
    public string $margin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'color' => is_string($value) ? $this->color = $value : parent::assignMember($name, $value),
            'margin' => is_string($value) ? $this->margin = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
