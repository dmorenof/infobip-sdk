<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Get;

final class MessagesByMsgIdResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'pinLength' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'language',
];

    /**
     * The ID of the application that represents your service (e.g. 2FA for login, 2FA for changing the password, etc.) for which the requested message has been created.
     */
    public string $applicationId;
    /**
     * Email template ID that should reference a previously created Email template. This field is present only for [Email message templates](#channels/sms/create-2fa-email-message-template).
     * Format: int64
     */
    public int $emailTemplateId;
    /**
     * The sender of the 2FA message, an email address with an optional sender name (e.g. `company&#64;example.com` or `Jane Smith <jane.smith&#64;somecompany.com>`). This field is present only for [Email message templates](#channels/sms/create-2fa-email-message-template).
     */
    public string $from;
    /**
     * Opt out landing page ID that should reference a previously created landing page template. This field is present only for [Email message templates](#channels/sms/create-2fa-email-message-template).
     */
    public string $landingPageId;
    /**
     * Language code which message is written in. This is used when sending text-to-speech messages. More about Text-to-speech functionality and supported TTS languages can be found [here](https://www.infobip.com/docs/voice-and-video/outbound-calls#text-to-speech-voice-over-broadcast). If not set, default language is `English [en]`. If voice is not set, then default voice for that specific language is used. In the case of English language, the voice is `[Joanna]`.
     */
    public string $language;
    /**
     * The ID of the message template (message body with the PIN placeholder) that is sent to the recipient.
     */
    public string $messageId;
    /**
     * Text of a message that will be sent. Message text must contain `pinPlaceholder`.
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
     * The PIN code placeholder that will be replaced with a generated PIN code.
     */
    public string $pinPlaceholder;
    /**
     * The type of PIN code that will be generated and sent as part of 2FA message. You can set PIN type to numeric, alpha, alphanumeric or hex.
     */
    public \InfobipSDK\Enums\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\PinType $pinType;
    /**
     * Region specific parameters, often specified by local laws. Use this if country or region that you are sending SMS to requires some extra parameters.
     */
    public \InfobipSDK\DTOs\C3b21d2ffef2552e10577daa67c904ac80618665b001ef386a4faefc515e78f3\RegionalOptions $regional;
    /**
     * In case PIN message is sent by Voice, DTMF code will enable replaying the message.
     */
    public string $repeatDTMF;
    /**
     * The sender of the 2FA message (Example: CompanyName).
     */
    public string $senderId;
    /**
     * In case PIN message is sent by Voice, the speed of speech can be set for the message. Supported range is from `0.5` to `2`.
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
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'emailTemplateId' => is_int($value) ? $this->emailTemplateId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'landingPageId' => is_string($value) ? $this->landingPageId = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'messageText' => is_string($value) ? $this->messageText = $value : parent::assignMember($name, $value),
            'pinLength' => is_int($value) ? $this->pinLength = $value : parent::assignMember($name, $value),
            'pinPlaceholder' => is_string($value) ? $this->pinPlaceholder = $value : parent::assignMember($name, $value),
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
