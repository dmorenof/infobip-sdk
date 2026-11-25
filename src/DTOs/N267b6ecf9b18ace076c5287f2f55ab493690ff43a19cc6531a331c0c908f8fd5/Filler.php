<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Filler
 *
 * @deprecated
 */
final class Filler extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Component
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'flex' => [
        'minimum' => 0,
        'maximum' => 20,
        'format' => 'int32',
    ],
];

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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flex' => is_int($value) ? $this->flex = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
