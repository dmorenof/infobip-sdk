<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * PlayedContentProperties
 *
 * Properties about content played before collecting DTMF input.
 */
final class PlayedContentProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * How long, in milliseconds, content was played before DTMF collection started.
     * Format: int64
     */
    public int $duration;
    /**
     * Whether the content was played completely, in it's full duration.
     */
    public bool $playedCompletely;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'playedCompletely' => is_bool($value) ? $this->playedCompletely = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
