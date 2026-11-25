<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * RecordingMetadataApiModel
 * Example: {"elements":[{"id":1,"recordingId":"11f1b111-1111-1111-a111-1111e11f111e","conversationId":"11f1b111-1111-1111-a111-1111e11f111a","conferenceId":"11f1b111-1111-1111-a111-1111e11f111b","callId":"11f1b111-1111-1111-a111-1111e11f111c","direction":"INBOUND","recordingStatus":"SUCCESSFUL","composed":false,"filename":"11f1b111-1111-1111-a111-1111e11f111a_IDENTITY_20230612155341-11f1b111-1111-1111-a111-1111e11f111e.wav","duration":28,"participantId":"11f1b111-1111-1111-a111-1111e11f111d","participantIdentity":"customer1","participantName":"Customer 1","participantType":"CUSTOMER","mediaType":"AUDIO","startedAt":1686585221999,"deletedAt":null,"deletedBy":null,"sftpPath":null,"transferredFrom":null,"transferredTo":null,"transferredFromQueue":null,"transferredToQueue":null},{"id":2,"recordingId":"52341263-0a22-1111-a1a1-1111bade8581","conversationId":"52341263-0a22-1111-a1a1-1111bade8582","conferenceId":"52341263-0a22-1111-a1a1-1111bade8583","callId":"52341263-0a22-1111-a1a1-1111bade8584","direction":"INBOUND","recordingStatus":"SUCCESSFUL","composed":false,"filename":"52341263-0a22-1111-a1a1-1111bade8582_IDENTITY_20230612155341-52341263-0a22-1111-a1a1-1111bade8581.wav","duration":28,"participantId":"52341263-0a22-1111-a1a1-1111bade8584","participantIdentity":"agent1","participantName":"Agent 1","participantType":"AGENT","mediaType":"AUDIO","startedAt":1686585221999,"deletedAt":null,"deletedBy":null,"sftpPath":null,"transferredFrom":null,"transferredTo":null,"transferredFromQueue":null,"transferredToQueue":null}],"total":2,"totalPages":1}
 */
final class RecordingMetadataApiModel extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Call id of the recorded file.
     */
    public string $callId;
    /**
     * Flag indicating whether the recorded file is composed.
     */
    public bool $composed;
    /**
     * Conference id of the recorded file.
     */
    public string $conferenceId;
    /**
     * Conversation id of the recorded file.
     */
    public string $conversationId;
    /**
     * Unix timestamp for when the recorded file was deleted.
     * Example: 1686585221999
     * Format: int64
     */
    public int $deletedAt;
    /**
     * Identity of the user who deleted the recorded file.
     */
    public string $deletedBy;
    /**
     * Call direction of the recorded file.
     */
    public string $direction;
    /**
     * Duration of the recorded file in seconds.
     * Format: int64
     */
    public int $duration;
    /**
     * Filename of the recorded file.
     */
    public string $filename;
    /**
     * Specifies recorded file type. Values can be either audio or audio and video.
     */
    public string $mediaType;
    /**
     * Unique id of the participant associated with the recorded file.
     */
    public string $participantId;
    /**
     * Unique identity of the participant associated with the recorded file.
     */
    public string $participantIdentity;
    /**
     * Participant name associated with the recorded file.
     */
    public string $participantName;
    /**
     * Participant type associated with the recorded file. Values can be either customer or agent.
     */
    public string $participantType;
    /**
     * Unique id of the recorded file.
     */
    public string $recordingId;
    /**
     * Status of the recorded file.
     */
    public string $recordingStatus;
    /**
     * Location of the recorded file on the SFTP server.
     */
    public string $sftpPath;
    /**
     * Unix timestamp for when the recording started.
     * Example: 1686585221999
     * Format: int64
     */
    public int $startedAt;
    /**
     * Identity of the user who has transferred the call.
     */
    public string $transferredFrom;
    /**
     * Queue id from which the call has been transferred.
     */
    public string $transferredFromQueue;
    /**
     * Identity of the user to whom the call has been transferred.
     */
    public string $transferredTo;
    /**
     * Queue id to which the call has been transferred.
     */
    public string $transferredToQueue;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'composed' => is_bool($value) ? $this->composed = $value : parent::assignMember($name, $value),
            'conferenceId' => is_string($value) ? $this->conferenceId = $value : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'deletedAt' => is_int($value) ? $this->deletedAt = $value : parent::assignMember($name, $value),
            'deletedBy' => is_string($value) ? $this->deletedBy = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'mediaType' => is_string($value) ? $this->mediaType = $value : parent::assignMember($name, $value),
            'participantId' => is_string($value) ? $this->participantId = $value : parent::assignMember($name, $value),
            'participantIdentity' => is_string($value) ? $this->participantIdentity = $value : parent::assignMember($name, $value),
            'participantName' => is_string($value) ? $this->participantName = $value : parent::assignMember($name, $value),
            'participantType' => is_string($value) ? $this->participantType = $value : parent::assignMember($name, $value),
            'recordingId' => is_string($value) ? $this->recordingId = $value : parent::assignMember($name, $value),
            'recordingStatus' => is_string($value) ? $this->recordingStatus = $value : parent::assignMember($name, $value),
            'sftpPath' => is_string($value) ? $this->sftpPath = $value : parent::assignMember($name, $value),
            'startedAt' => is_int($value) ? $this->startedAt = $value : parent::assignMember($name, $value),
            'transferredFrom' => is_string($value) ? $this->transferredFrom = $value : parent::assignMember($name, $value),
            'transferredFromQueue' => is_string($value) ? $this->transferredFromQueue = $value : parent::assignMember($name, $value),
            'transferredTo' => is_string($value) ? $this->transferredTo = $value : parent::assignMember($name, $value),
            'transferredToQueue' => is_string($value) ? $this->transferredToQueue = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
