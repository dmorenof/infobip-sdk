<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * NumberMaskingRecording
 *
 * Recording configuration of a Number Masking call.
 */
final class NumberMaskingRecording extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether call recording is enabled from the callee perspective.
     */
    public bool $enabled;
    /**
     * Flag that indicates whether the callee announcement will be included in the recording file. If not set, it will be `true`.
     */
    public bool $recordCalleeAnnouncement;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'recordCalleeAnnouncement' => is_bool($value) ? $this->recordCalleeAnnouncement = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
