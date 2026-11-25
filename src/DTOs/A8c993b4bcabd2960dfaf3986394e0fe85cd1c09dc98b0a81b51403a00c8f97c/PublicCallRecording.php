<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c;

/**
 * PublicCallRecording
 */
final class PublicCallRecording extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'endpoint',
];

    protected const array VALIDATION = [
    'callId' => [
        'maxLength' => 128,
    ],
];

    /**
     * Call ID.
     * Example: "d8d84155-3831-43fb-91c9-10b5a8d628a0"
     */
    public string $callId {
        set {
            $this->assigning('callId', $value);
            $this->callId = $value;
        }
    }
    /**
     * Calls Configuration ID.
     */
    public string $callsConfigurationId;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection $direction;
    /**
     * Date and time when the (last) call recording ended.
     * Format: date-time
     */
    public string $endTime;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint $endpoint;
    /**
     * Call recording files.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ConferenceRecordingLog\ComposedFilesCollection $files;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    /**
     * Reason for recording failure.
     */
    public string $reason;
    /**
     * Date and time when the (first) call recording started.
     * Format: date-time
     */
    public string $startTime;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection::from($value) : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint($value) : parent::assignMember($name, $value),
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ConferenceRecordingLog\ComposedFilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicRecordingFile::class)) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
