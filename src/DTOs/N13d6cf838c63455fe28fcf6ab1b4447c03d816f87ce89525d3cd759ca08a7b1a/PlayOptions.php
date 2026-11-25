<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * PlayOptions
 */
final class PlayOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'loopCount' => [
        'minimum' => 1,
        'maximum' => 10,
        'format' => 'int32',
    ],
];

    /**
     * Number of times the file will be played.
     * Format: int32
     */
    public int $loopCount {
        set {
            $this->assigning('loopCount', $value);
            $this->loopCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
