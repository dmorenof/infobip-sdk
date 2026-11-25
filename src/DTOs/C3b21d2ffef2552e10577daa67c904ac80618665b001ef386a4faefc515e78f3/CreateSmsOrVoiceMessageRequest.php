<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3;

/**
 * CreateSmsOrVoiceMessageRequest
 */
final class CreateSmsOrVoiceMessageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messageText',
    'pinType',
];

    protected const array VALIDATION = [
    'pinLength' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'language',
    'messageText',
    'pinLength',
    'pinType',
    'regional',
    'repeatDTMF',
    'senderId',
    'speechRate',
    'voiceName',
];

    /**
     * Language code which message is written in. This is used when sending text-to-speech messages. More about Text-to-speech functionality and supported TTS languages can be found [here](https://www.infobip.com/docs/voice-and-video/outbound-calls#text-to-speech-voice-over-broadcast). If not set, default language is `English [en]`. If voice is not set, then default voice for that specific language is used. In the case of English language, the voice is `[Joanna]`.
     */
    public string $language;
    /**
     * Content of the message being sent which contains at minimum one placeholder for a PIN code (`{{pin}}`). Placeholder format is `{{placeholderName}}`.
     */
    public string $messageText;
    /**
     * PIN code length.
     * Format: int32
     */
    public int $pinLength {
        set {
            $this->assigning('pinLength', $value);
            $this->pinLength = $value;
        }
    }
    /**
     * Type of PIN code that will be generated and sent as part of 2FA message.
     */
    public \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType $pinType;
    /**
     * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending a message to requires additional information.
     */
    public \InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\RegionalOptions $regional;
    /**
     * If the PIN is sent as a voice message, the DTMF code allows the recipient to replay the message.
     */
    public string $repeatDTMF;
    /**
     * The name that will appear as the sender of the 2FA message (Example: CompanyName).
     */
    public string $senderId;
    /**
     * The speed of narration for messages sent as voice. Supported range is from `0.5` to `2`.
     * Format: double
     */
    public float $speechRate;
    /**
     * Defines the voice that will be used for the chosen language (example: Joanna). For each supported language, we may offer different voices (learn more [here](https://www.infobip.com/docs/voice-and-video/reference#text-to-speech-languages)). You can use this [method](https://www.infobip.com/docs/api/channels/voice/voice-message/get-voices) to retrieve all voices for the given language. If not defined, it will default to the standard voice for the selected language (if available). If the standard voice is not available, the request will fail. To avoid that, you can choose one of the neural voices (charges will apply).
     */
    public string $voiceName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'messageText' => is_string($value) ? $this->messageText = $value : parent::assignMember($name, $value),
            'pinLength' => is_int($value) ? $this->pinLength = $value : parent::assignMember($name, $value),
            'pinType' => is_string($value) ? $this->pinType = \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType::from($value) : parent::assignMember($name, $value),
            'regional' => $value instanceof \stdClass ? $this->regional = new \InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\RegionalOptions($value) : parent::assignMember($name, $value),
            'repeatDTMF' => is_string($value) ? $this->repeatDTMF = $value : parent::assignMember($name, $value),
            'senderId' => is_string($value) ? $this->senderId = $value : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'voiceName' => is_string($value) ? $this->voiceName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
