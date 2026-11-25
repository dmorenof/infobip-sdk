<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailAudioIdContent
 *
 * Voicemail content using a previously uploaded audio file.
 */
final class RinglessVoicemailAudioIdContent extends \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'audioId' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Identifier of a previously uploaded audio file.
     * Example: "a58b04eb-9f82-463c-b90e-6203f8e200df"
     */
    public string $audioId {
        set {
            $this->assigning('audioId', $value);
            $this->audioId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioId' => is_string($value) ? $this->audioId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
