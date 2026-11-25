<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102;

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
    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\Direction $direction;
    /**
     * Call endpoint. Represents a caller for the inbound calls and a callee for the outbound calls.
     */
    public string $endpoint;
    /**
     * Recording files.
     */
    public \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\CallRecording\FilesCollection $files;
    /**
     * Reason for recording failure.
     */
    public string $reason;
    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\Direction::from($value) : parent::assignMember($name, $value),
            'endpoint' => is_string($value) ? $this->endpoint = $value : parent::assignMember($name, $value),
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \InfobipSDK\Collections\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\CallRecording\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\RecordingFile::class)) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
