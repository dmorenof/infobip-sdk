<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Pause
 *
 * Pause action pauses execution of the IVR scenario for the provided duration.
 */
final class Pause extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'pause',
];

    protected const array VALIDATION = [
    'actionId' => [
        'format' => 'int32',
    ],
    'pause' => [
        'minimum' => 0,
        'maximum' => 5,
        'exclusiveMinimum' => 0,
    ],
];

    /**
     * User-defined ID of an action that can be used with go-to action.
     * Format: int32
     */
    public int $actionId {
        set {
            $this->assigning('actionId', $value);
            $this->actionId = $value;
        }
    }
    /**
     * the amount to wait in seconds, from 0 (exclusive) to 5 (inclusive)
     * Format: double
     */
    public float $pause {
        set {
            $this->assigning('pause', $value);
            $this->pause = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'pause' => is_float($value) ? $this->pause = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
