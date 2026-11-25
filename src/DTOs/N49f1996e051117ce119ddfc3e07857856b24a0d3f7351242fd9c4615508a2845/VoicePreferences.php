<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N49f1996e051117ce119ddfc3e07857856b24a0d3f7351242fd9c4615508a2845;

/**
 * VoicePreferences
 *
 * Voice preferences for text-to-speech.
 */
final class VoicePreferences extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Voice name in which text would be synthesized. More info about available languages and voices can be found [here](https://www.infobip.com/docs/voice-and-video/reference#available-voices-by-language). Use value from Name column in the table.
     * Example: "Joanna"
     */
    public string $voice;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Gender $voiceGender;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'voice' => is_string($value) ? $this->voice = $value : parent::assignMember($name, $value),
            'voiceGender' => is_string($value) ? $this->voiceGender = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Gender::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
