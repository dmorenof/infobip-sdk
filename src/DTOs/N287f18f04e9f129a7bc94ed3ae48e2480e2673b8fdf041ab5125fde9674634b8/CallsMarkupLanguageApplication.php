<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CallsMarkupLanguageApplication
 *
 * Application data for the recording.
 */
final class CallsMarkupLanguageApplication extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Call identifier.
     */
    public string $callId;
    /**
     * Dialog identifier.
     */
    public string $dialogId;
    /**
     * End time of the call.
     * Example: "2024-05-01T14:30:22.458Z"
     * Format: date-time
     */
    public string $endTime;
    /**
     * Markup language recording identifier.
     */
    public string $markupRecordingId;
    /**
     * Markup URL used to initiate the call.
     */
    public string $markupUrl;
    /**
     * Start time of the call.
     * Example: "2024-05-01T14:25:22.458Z"
     * Format: date-time
     */
    public string $startTime;
    /**
     * Application type.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallsMarkupLanguageApplication\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'dialogId' => is_string($value) ? $this->dialogId = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'markupRecordingId' => is_string($value) ? $this->markupRecordingId = $value : parent::assignMember($name, $value),
            'markupUrl' => is_string($value) ? $this->markupUrl = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallsMarkupLanguageApplication\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
