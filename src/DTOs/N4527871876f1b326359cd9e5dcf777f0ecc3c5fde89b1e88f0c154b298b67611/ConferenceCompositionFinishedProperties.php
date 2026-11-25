<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ConferenceCompositionFinishedProperties
 *
 * Conference recording information available upon finished composition.
 */
final class ConferenceCompositionFinishedProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N7b57a3f63e8903c91849b16f49588058258cfa7d794a974c87de13a6bfe457e6\ConferenceRecording $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N7b57a3f63e8903c91849b16f49588058258cfa7d794a974c87de13a6bfe457e6\ConferenceRecording($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
