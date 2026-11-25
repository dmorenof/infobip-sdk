<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Pause
 *
 * Pause action waits for a specified duration before executing the next instruction.
 */
final class Pause extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'duration',
];

    protected const array VALIDATION = [
    'duration' => [
        'minimum' => 1,
        'maximum' => 5,
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Pause\ActionEnum $action;
    /**
     * Duration of the pause in seconds (1 to 5).
     * Format: double
     */
    public float $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Pause\ActionEnum::from($value) : parent::assignMember($name, $value),
            'duration' => is_float($value) ? $this->duration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
