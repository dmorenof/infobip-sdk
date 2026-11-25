<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotKeyboardDisplay
 */
final class ViberBotKeyboardDisplay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'percentageOfKeyboardOccupancy' => [
        'minimum' => 40,
        'maximum' => 70,
        'format' => 'int32',
    ],
];

    /**
     * When true - the keyboard will always be displayed with the same height as the native keyboard
     */
    public bool $nativeKeyboardHeight;
    /**
     * How much percent of free screen space in chat should be taken by keyboard
     * Format: int32
     */
    public int $percentageOfKeyboardOccupancy {
        set {
            $this->assigning('percentageOfKeyboardOccupancy', $value);
            $this->percentageOfKeyboardOccupancy = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'nativeKeyboardHeight' => is_bool($value) ? $this->nativeKeyboardHeight = $value : parent::assignMember($name, $value),
            'percentageOfKeyboardOccupancy' => is_int($value) ? $this->percentageOfKeyboardOccupancy = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
