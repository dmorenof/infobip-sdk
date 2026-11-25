<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N42b3068683a04f02f0303cd880adeb4415571c6aad33d9a3c6850123c94c9889;

/**
 * VoiceReportsResponse
 */
final class VoiceReportsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Arrays of delivery reports, one object for every message.
     */
    public \InfobipSDK\Collections\N42b3068683a04f02f0303cd880adeb4415571c6aad33d9a3c6850123c94c9889\VoiceReportsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N42b3068683a04f02f0303cd880adeb4415571c6aad33d9a3c6850123c94c9889\VoiceReportsResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N42b3068683a04f02f0303cd880adeb4415571c6aad33d9a3c6850123c94c9889\VoiceReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
