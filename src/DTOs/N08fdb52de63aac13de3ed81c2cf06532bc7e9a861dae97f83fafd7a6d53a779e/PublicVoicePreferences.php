<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e;

/**
 * PublicVoicePreferences
 *
 * Voice preferences.
 */
final class PublicVoicePreferences extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Gender $voiceGender;
    /**
     * Voice name in which text would be synthesized. More info about available languages and voices can be found [here](https://www.infobip.com/docs/voice-and-video/getting-started#text-to-speech-add-ons-and-options).
     */
    public \InfobipSDK\Enums\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences\VoiceNameEnum $voiceName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'voiceGender' => is_string($value) ? $this->voiceGender = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Gender::from($value) : parent::assignMember($name, $value),
            'voiceName' => is_string($value) ? $this->voiceName = \InfobipSDK\Enums\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\PublicVoicePreferences\VoiceNameEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
