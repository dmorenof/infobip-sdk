<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102;

/**
 * Recording
 *
 * Recording metadata
 */
final class Recording extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Call recording data.
     */
    public \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\Recording\CallRecordingsCollection $callRecordings;
    /**
     * Composed recording files.
     */
    public \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\CallRecording\FilesCollection $composedFiles;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callRecordings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->callRecordings = new \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\Recording\CallRecordingsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\CallRecording::class)) : parent::assignMember($name, $value),
            'composedFiles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->composedFiles = new \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\CallRecording\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\RecordingFile::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
