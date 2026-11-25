<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * MultiTtsApiMessage
 *
 * Array of messages to be sent, one per every message.
 */
final class MultiTtsApiMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'to',
    ];

    protected const array VALIDATION = [
        'to' => [
            'minItems' => 1,
        ],
    ];

    /**
     * An audio file can be delivered as a voice message to the recipients. An audio file must be uploaded online, so that the existing URL can be available for file download. Size of the audio file must be below 4 MB. Supported formats of the provided file are aac, aiff, m4a, mp2, mp3, mp4 (audio only), ogg, wav and wma. Our platform needs to have permission to make GET and HEAD HTTP requests on the provided URL. Standard http ports (like 80, 8080, etc.) are advised.
     */
    public string $audioFileUrl;
    /**
     * Numeric sender ID in E.164 standard format (Example: 41793026727). This is caller ID that will be presented to the end user where applicable.
     */
    public string $from;
    /**
     * If the message is in text format, the language in which the message is written must be defined for correct pronunciation. More about Text-to-speech functionality and supported TTS languages can be found [here](https://www.infobip.com/docs/voice-and-video/outbound-calls#text-to-speech-voice-over-broadcast). If not set, default language is `English [en]`. If voice is not set, then default voice for that specific language is used. In the case of English language, the voice is `[Joanna]`.
     * Documentation: https://www.infobip.com/docs/voice-and-video/reference#text-to-speech-languages
     */
    public string $language;
    /**
     * Text of the message that will be sent. Message text can be up to 1400 characters long and cannot contain only punctuation. SSML (_Speech Synthesis Markup Language_) is supported and can be used to fully customize pronunciation of the provided text.
     * Documentation: https://www.infobip.com/docs/voice-and-video/reference#ssml-support-text-to-speech-languages
     */
    public string $text;
    /**
     * Phone number of the recipient. Phone number must be written in E.164 standard format (Example: 41793026727). Maximum number of phone numbers listed is 20k.
     */
    public \InfobipSDK\Collections\StringCollection $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Voice $voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioFileUrl' => is_string($value) ? $this->audioFileUrl = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->to = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Voice($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
