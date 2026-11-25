<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * StatusRequest
 *
 * Status request.
 */
final class StatusRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'calculatedDuration' => [
            'format' => 'int32',
        ],
        'duration' => [
            'format' => 'int32',
        ],
        'inboundDuration' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Requested action (dial, audio, captureDtmf).
     */
    public string $action;
    /**
     * Date and time when the call was answered.
     */
    public string $answeredTime;
    /**
     * The duration of the outbound part of the number masking session, where the voice billing model (1/1, 15/15,...) has been applied to the calculatedDuration.
     * Format: int32
     */
    public int $calculatedDuration {
        set {
            $this->assigning('calculatedDuration', $value);
            $this->calculatedDuration = $value;
        }
    }
    /**
     * Client-defined ID of a valid file name. Used to correlate a call with this reference. If recording is enabled and files are stored in the SFTP server, that ID will be used as a file name instead.
     */
    public string $clientReferenceId;
    /**
     * Unique identifier of the call record, available for both Callback and Status requests.
     */
    public string $correlationId;
    /**
     * The currency in which the price is expressed.
     */
    public string $currency;
    /**
     * Duration of the outbound call shown in seconds
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    /**
     * Identifier of the file played to the caller.
     */
    public string $fileID;
    /**
     * The URL of the file played to the caller.
     */
    public string $fileUrl;
    /**
     * Caller phone number.
     */
    public string $from;
    /**
     * Duration of the inbound call shown in seconds.
     * Format: int32
     */
    public int $inboundDuration {
        set {
            $this->assigning('inboundDuration', $value);
            $this->inboundDuration = $value;
        }
    }
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MachineDetectionResult $machineDetectionResult;
    /**
     * Unique identifier for correlation with inbound call, available in Callback and Status requests.
     */
    public string $nmCorrelationId;
    /**
     * This is the price per second for the outbound part of the number masking session, with the price being expressed in cents per second.
     * Format: double
     */
    public float $pricePerSecond;
    /**
     * Flag that indicates if callee announcement is included in recording file.
     */
    public bool $recordCalleeAnnouncement;
    /**
     * ID of a recording file of a call.
     */
    public string $recordingFileId;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingStatus $recordingStatus;
    /**
     * Date and time when ringing started.
     */
    public string $ringingTime;
    /**
     * Call status which can be: answered, busy, no answer, failed or congestion
     */
    public string $status;
    /**
     * Called phone number.
     */
    public string $to;
    /**
     * Called party phone number that the call is transferred to.
     */
    public string $transferTo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'answeredTime' => is_string($value) ? $this->answeredTime = $value : parent::assignMember($name, $value),
            'calculatedDuration' => is_int($value) ? $this->calculatedDuration = $value : parent::assignMember($name, $value),
            'clientReferenceId' => is_string($value) ? $this->clientReferenceId = $value : parent::assignMember($name, $value),
            'correlationId' => is_string($value) ? $this->correlationId = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'fileID' => is_string($value) ? $this->fileID = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'inboundDuration' => is_int($value) ? $this->inboundDuration = $value : parent::assignMember($name, $value),
            'machineDetectionResult' => is_string($value) ? $this->machineDetectionResult = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MachineDetectionResult::from($value) : parent::assignMember($name, $value),
            'nmCorrelationId' => is_string($value) ? $this->nmCorrelationId = $value : parent::assignMember($name, $value),
            'pricePerSecond' => is_float($value) ? $this->pricePerSecond = $value : parent::assignMember($name, $value),
            'recordCalleeAnnouncement' => is_bool($value) ? $this->recordCalleeAnnouncement = $value : parent::assignMember($name, $value),
            'recordingFileId' => is_string($value) ? $this->recordingFileId = $value : parent::assignMember($name, $value),
            'recordingStatus' => is_string($value) ? $this->recordingStatus = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingStatus::from($value) : parent::assignMember($name, $value),
            'ringingTime' => is_string($value) ? $this->ringingTime = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'transferTo' => is_string($value) ? $this->transferTo = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
