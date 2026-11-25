<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * AudioUploadResponse
 *
 * Response containing the uploaded audio file identifier.
 */
final class AudioUploadResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'audioId',
];

    /**
     * Unique identifier for the uploaded audio file. Use this value as audioId when sending a ringless voicemail with content type AUDIO_ID.
     * Example: "a58b04eb-9f82-463c-b90e-6203f8e200df"
     */
    public string $audioId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioId' => is_string($value) ? $this->audioId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
