<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7b57a3f63e8903c91849b16f49588058258cfa7d794a974c87de13a6bfe457e6;

/**
 * ConferenceRecording
 */
final class ConferenceRecording extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'conferenceId' => [
            'maxLength' => 128,
        ],
    ];

    /**
     * Application ID.
     *
     * @deprecated
     */
    public string $applicationId;
    /**
     * File(s) with a recording of one conference participant.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecording\CallRecordingsCollection $callRecordings;
    /**
     * Calls Configuration ID.
     */
    public string $callsConfigurationId;
    /**
     * File(s) with a recording of all conference participants.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecording\ComposedFilesCollection $composedFiles;
    /**
     * Conference ID.
     */
    public string $conferenceId {
        set {
            $this->assigning('conferenceId', $value);
            $this->conferenceId = $value;
        }
    }
    /**
     * Conference name.
     */
    public string $conferenceName;
    /**
     * Date and time when the (last) recording ended.
     * Format: date-time
     */
    public string $endTime;
    /**
     * Date and time when the (first) recording started.
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callRecordings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->callRecordings = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecording\CallRecordingsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N7b57a3f63e8903c91849b16f49588058258cfa7d794a974c87de13a6bfe457e6\CallRecording::class)) : parent::assignMember($name, $value),
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'composedFiles' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->composedFiles = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecording\ComposedFilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N7b57a3f63e8903c91849b16f49588058258cfa7d794a974c87de13a6bfe457e6\RecordingFile::class)) : parent::assignMember($name, $value),
            'conferenceId' => is_string($value) ? $this->conferenceId = $value : parent::assignMember($name, $value),
            'conferenceName' => is_string($value) ? $this->conferenceName = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
