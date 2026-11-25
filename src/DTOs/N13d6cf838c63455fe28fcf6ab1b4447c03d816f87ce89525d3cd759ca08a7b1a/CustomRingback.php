<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * CustomRingback
 *
 * Custom ringback tones configuration. Allows specifying different audio files to play during ringing and when the call fails.
 */
final class CustomRingback extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ringingAudio',
    ];

    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContent $failedAudio;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContent $ringingAudio;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'failedAudio' => $value instanceof \stdClass ? $this->failedAudio = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContent($value) : parent::assignMember($name, $value),
            'ringingAudio' => $value instanceof \stdClass ? $this->ringingAudio = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AudioContent($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
