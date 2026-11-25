<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * SayOptions
 */
final class SayOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'speechRate' => [
        'minimum' => 0.5,
        'maximum' => 2,
    ],
];

    /**
     * Must be defined for correct pronunciation. The parameter can be constructed using variables.
     */
    public string $language;
    /**
     * Must be within [0.5 - 2.0] range, default value is 1.
     * Format: double
     */
    public float $speechRate {
        set {
            $this->assigning('speechRate', $value);
            $this->speechRate = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceOptions $voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
