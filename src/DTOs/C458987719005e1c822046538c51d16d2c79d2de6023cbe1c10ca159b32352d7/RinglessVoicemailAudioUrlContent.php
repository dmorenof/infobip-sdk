<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailAudioUrlContent
 *
 * Voicemail content using a client-hosted audio file.
 */
final class RinglessVoicemailAudioUrlContent extends \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'audioUrl' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * HTTPS URL to the audio file.
     * Example: "https://example.com/audio/greeting.mp3"
     * Format: uri
     */
    public string $audioUrl {
        set {
            $this->assigning('audioUrl', $value);
            $this->audioUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioUrl' => is_string($value) ? $this->audioUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
