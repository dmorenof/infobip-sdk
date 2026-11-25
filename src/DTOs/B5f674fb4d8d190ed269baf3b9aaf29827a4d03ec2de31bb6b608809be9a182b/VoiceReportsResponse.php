<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b;

/**
 * VoiceReportsResponse
 */
final class VoiceReportsResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Arrays of delivery reports, one object for every message.
     */
    public \InfobipSDK\Collections\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\VoiceReportsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\VoiceReportsResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\VoiceReport::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
