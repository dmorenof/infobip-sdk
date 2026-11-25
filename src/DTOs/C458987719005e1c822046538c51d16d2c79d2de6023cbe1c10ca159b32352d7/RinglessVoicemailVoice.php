<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailVoice
 *
 * Voice configuration for text-to-speech.
 */
final class RinglessVoicemailVoice extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailVoiceGender $gender;
    /**
     * Name of the voice to use. See available voices: https://www.infobip.com/docs/voice-and-video/reference#available-voices-by-language
     * Example: "Kendra"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gender' => is_string($value) ? $this->gender = \InfobipSDK\Enums\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailVoiceGender::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
