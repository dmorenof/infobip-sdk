<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Record
 *
 * Record action records audio from the call.
 */
final class Record extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'callback',
];

    protected const array VALIDATION = [
    'maxSilence' => [
        'format' => 'int32',
    ],
    'recordingStatusCallbackEvents' => [
        'uniqueItems' => true,
    ],
    'timeout' => [
        'format' => 'int32',
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Record\ActionEnum $action;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl $callback;
    /**
     * DTMF digit to escape recording.
     */
    public string $escapeDtmf;
    /**
     * Maximum silence duration in seconds before stopping recording.
     * Format: int32
     */
    public int $maxSilence {
        set {
            $this->assigning('maxSilence', $value);
            $this->maxSilence = $value;
        }
    }
    /**
     * Whether to play a beep before recording starts.
     */
    public bool $playBeep;
    /**
     * Set of recording status events that trigger the recording status callback.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DialRecording\CallbackEventsCollection $recordingStatusCallbackEvents {
        set {
            $this->assigning('recordingStatusCallbackEvents', $value);
            $this->recordingStatusCallbackEvents = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl $recordingStatusCallbackUrl;
    /**
     * Maximum recording duration in seconds.
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Record\ActionEnum::from($value) : parent::assignMember($name, $value),
            'callback' => $value instanceof \stdClass ? $this->callback = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            'escapeDtmf' => is_string($value) ? $this->escapeDtmf = $value : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            'playBeep' => is_bool($value) ? $this->playBeep = $value : parent::assignMember($name, $value),
            'recordingStatusCallbackUrl' => $value instanceof \stdClass ? $this->recordingStatusCallbackUrl = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
