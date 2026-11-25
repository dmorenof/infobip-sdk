<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * GoToOptions
 */
final class GoToOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'goToLimit' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    /**
     * Name of the variable which counts passes through goto action
     */
    public string $countVariable;
    /**
     * Maximum number of times goto can jump to specified action. Valid values are from 1 to 100.
     * Format: int32
     */
    public int $goToLimit {
        set {
            $this->assigning('goToLimit', $value);
            $this->goToLimit = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countVariable' => is_string($value) ? $this->countVariable = $value : parent::assignMember($name, $value),
            'goToLimit' => is_int($value) ? $this->goToLimit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
