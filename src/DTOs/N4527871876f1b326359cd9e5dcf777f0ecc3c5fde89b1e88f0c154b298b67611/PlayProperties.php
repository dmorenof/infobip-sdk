<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * PlayProperties
 *
 * Properties of the events that provide playback results.
 */
final class PlayProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Collected DTMF input that stopped the file playback.
     */
    public string $capturedDtmf;
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PlayProperties\CustomDataMap $customData;
    /**
     * How long, in milliseconds, file was played before the playback was stopped.
     * Format: int64
     */
    public int $duration;
    /**
     * Whether the file was played completely, in its full duration.
     */
    public bool $playedCompletely;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capturedDtmf' => is_string($value) ? $this->capturedDtmf = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'playedCompletely' => is_bool($value) ? $this->playedCompletely = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
