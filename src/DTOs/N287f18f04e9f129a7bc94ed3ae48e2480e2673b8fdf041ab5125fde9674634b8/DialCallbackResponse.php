<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * DialCallbackResponse
 */
final class DialCallbackResponse extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackResponse
{
    public const array REQUIRED_FIELDS = [
    'command',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Announcements $announcements;
    /**
     * Caller ID displayed to a called party.
     */
    public string $callerId;
    /**
     * A user-defined reference ID for associating with a number masking session. This ID will appear in subsequent status requests and, if the session is recorded and our SFTP facility is used, will name the recording file. **Note:** In the case of recording, please limit this field to `200` characters as generated file name uses this field, call ID and extension, and if total file name is bigger than 256 characters, saving of the recording file will fail.
     */
    public string $clientReferenceId;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\NumberMaskingMachineDetection $machineDetection;
    /**
     * Destination phone number to call.
     */
    public string $phoneNumber;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\NumberMaskingRecording $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'announcements' => $value instanceof \stdClass ? $this->announcements = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Announcements($value) : parent::assignMember($name, $value),
            'callerId' => is_string($value) ? $this->callerId = $value : parent::assignMember($name, $value),
            'clientReferenceId' => is_string($value) ? $this->clientReferenceId = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\NumberMaskingMachineDetection($value) : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\NumberMaskingRecording($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
