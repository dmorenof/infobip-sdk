<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * AudioCallbackResponse
 */
final class AudioCallbackResponse extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackResponse
{
    public const array REQUIRED_FIELDS = [
    'command',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Identification of the audio file to be played to the caller. Required if `fileUrl` is not provided.
     */
    public string $fileId;
    /**
     * Url of the audio file to be played to the caller. Required if `fileId` is not provided.
     */
    public string $fileUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
