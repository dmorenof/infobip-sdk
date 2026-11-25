<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N707907921d4508c2925eddc2449f10db322ecc083be424f87c50fe97ccd8be40;

/**
 * ActionConferenceRequest
 */
final class ActionConferenceRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxDuration' => [
        'format' => 'int32',
    ],
];

    /**
     * Max duration in seconds.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    /**
     * Conference name, will be auto-generated if not provided.
     */
    public string $name;
    public \InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02\ConferenceRecordingRequest $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02\ConferenceRecordingRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
