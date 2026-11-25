<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * RecordedIvrFile
 *
 * Array of recorded files metadata, one for each recorded file.
 */
final class RecordedIvrFile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Numeric sender ID.
     */
    public string $from;
    /**
     * Differentiates recordings made by separate Record actions.
     */
    public string $groupId;
    /**
     * The ID that uniquely identifies the sent message.
     */
    public string $messageId;
    /**
     * The time the recording took place.
     * Format: date-time
     */
    public string $recordedAt;
    /**
     * Scenario key.
     */
    public string $scenarioId;
    /**
     * Destination address.
     */
    public string $to;
    /**
     * Relative URL path to the recorded file. To download the audio, just perform a GET request using the relative URL of a specific file. The returned audio data is encoded as PCM 16bit 8kHz WAVE audio. The files are available on Infobip servers for 2 months.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'groupId' => is_string($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'recordedAt' => is_string($value) ? $this->recordedAt = $value : parent::assignMember($name, $value),
            'scenarioId' => is_string($value) ? $this->scenarioId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
