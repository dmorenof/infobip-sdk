<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e;

/**
 * CallRecording
 *
 * Call recording metadata.
 */
final class CallRecording extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Call identifier.
     */
    public string $callId;
    public \InfobipSDK\Enums\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallDirection $direction;
    /**
     * Call endpoint. Represents a caller for the inbound calls and a callee for the outbound calls.
     */
    public string $endpoint;
    /**
     * Recording files.
     */
    public \InfobipSDK\Collections\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRecording\FilesCollection $files;
    /**
     * Reason for recording failure.
     */
    public string $reason;
    /**
     * Status of call recording.
     */
    public string $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallDirection::from($value) : parent::assignMember($name, $value),
            'endpoint' => is_string($value) ? $this->endpoint = $value : parent::assignMember($name, $value),
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \InfobipSDK\Collections\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRecording\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordedFile::class)) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
