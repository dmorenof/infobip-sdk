<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * AudioListItem
 *
 * Metadata for a single uploaded audio file.
 */
final class AudioListItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'audioId',
    'createdAt',
    'name',
    'size',
];

    /**
     * Unique identifier for the audio file. Use this value as audioId when sending a ringless voicemail with content type AUDIO_ID.
     * Example: "a58b04eb-9f82-463c-b90e-6203f8e200df"
     */
    public string $audioId;
    /**
     * Upload timestamp, in the account's timezone.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Filename provided at upload time.
     * Example: "greeting.mp3"
     */
    public string $name;
    /**
     * File size in bytes.
     * Example: 48213
     * Format: int64
     */
    public int $size;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioId' => is_string($value) ? $this->audioId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
