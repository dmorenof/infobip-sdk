<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailContent
 *
 * Audio content for the voicemail.
 */
class RinglessVoicemailContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    'AUDIO_ID' => 'InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\RinglessVoicemailAudioIdContent',
    'AUDIO_URL' => 'InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\RinglessVoicemailAudioUrlContent',
    'TEXT' => 'InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\RinglessVoicemailTextContent',
    'c458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7.RinglessVoicemailAudioIdContent' => 'InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\RinglessVoicemailAudioIdContent',
    'c458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7.RinglessVoicemailAudioUrlContent' => 'InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\RinglessVoicemailAudioUrlContent',
    'c458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7.RinglessVoicemailTextContent' => 'InfobipSDK\\DTOs\\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\\RinglessVoicemailTextContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
