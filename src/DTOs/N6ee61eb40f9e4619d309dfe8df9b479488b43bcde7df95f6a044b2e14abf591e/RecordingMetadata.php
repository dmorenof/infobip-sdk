<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e;

/**
 * RecordingMetadata
 *
 * Recording metadata
 */
final class RecordingMetadata extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Call recording data.
     */
    public \InfobipSDK\Collections\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordingMetadata\CallRecordingsCollection $callRecordings;
    /**
     * Composed recording files.
     */
    public \InfobipSDK\Collections\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRecording\FilesCollection $composedFiles;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callRecordings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->callRecordings = new \InfobipSDK\Collections\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordingMetadata\CallRecordingsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRecording::class)) : parent::assignMember($name, $value),
            'composedFiles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->composedFiles = new \InfobipSDK\Collections\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\CallRecording\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordedFile::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
