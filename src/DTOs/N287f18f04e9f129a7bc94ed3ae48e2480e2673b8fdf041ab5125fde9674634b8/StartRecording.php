<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * StartRecording
 *
 * StartRecording action starts recording the call.
 */
final class StartRecording extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
    ];

    protected const array VALIDATION = [
        'recordingStatusCallbackEvents' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\StartRecording\ActionEnum $action;
    /**
     * Whether to play a beep when recording starts.
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\StartRecording\ActionEnum::from($value) : parent::assignMember($name, $value),
            'playBeep' => is_bool($value) ? $this->playBeep = $value : parent::assignMember($name, $value),
            'recordingStatusCallbackUrl' => $value instanceof \stdClass ? $this->recordingStatusCallbackUrl = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
