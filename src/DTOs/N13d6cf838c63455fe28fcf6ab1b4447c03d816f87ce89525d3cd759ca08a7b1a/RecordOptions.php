<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * RecordOptions
 */
final class RecordOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxSilence' => [
        'format' => 'int32',
    ],
];

    /**
     * Flag indicating a beep sound should be played at the start of the recording.
     */
    public bool $beep;
    /**
     * DTMF codes which should stop recording when input by the user.
     */
    public string $escapeDigits;
    /**
     * The identifier for the recording. Identified recordings can be reused in Play from Recording. The parameter can be constructed using variables.
     */
    public string $identifier;
    /**
     * The amount of silence to wait for before stopping the recording.
     * Format: int32
     */
    public int $maxSilence {
        set {
            $this->assigning('maxSilence', $value);
            $this->maxSilence = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'beep' => is_bool($value) ? $this->beep = $value : parent::assignMember($name, $value),
            'escapeDigits' => is_string($value) ? $this->escapeDigits = $value : parent::assignMember($name, $value),
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
