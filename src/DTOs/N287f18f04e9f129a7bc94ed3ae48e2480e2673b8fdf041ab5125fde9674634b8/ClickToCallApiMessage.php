<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * ClickToCallApiMessage
 *
 * Array of click to call messages to be sent.
 */
final class ClickToCallApiMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destinationA',
    'destinationB',
    'from',
];

    protected const array VALIDATION = [
    'maxDuration' => [
        'format' => 'int32',
    ],
    'notifyContentVersion' => [
        'format' => 'int32',
    ],
    'warningTime' => [
        'format' => 'int32',
    ],
];

    /**
     * If set, same numeric sender (defined in _from_) is used for both calls (towards _destinationA_ and _destinationB_). If not set, _destinationA_ will be shown to _destinationB_. If _fromB_ is set up, _anonymization_ will not be applied; _from_ will be shown to _destinationA_ and _fromB_ will be shown to _destinationB_. Default value is `false`.
     */
    public bool $anonymization;
    /**
     * An audio file can be delivered as a voice message to the recipients. An audio file must be uploaded online, so that the existing URL can be available for file download. Size of the audio file must be below 4 MB. Supported formats of the provided file are aac, aiff, m4a, mp2, mp3, mp4 (audio only), ogg, wav and wma. Our platform needs to have permission to make GET and HEAD HTTP requests on the provided URL. Standard http ports (like 80, 8080, etc.) are advised.
     */
    public string $audioFileUrl;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * Original destination address. Address must be in the international format (Example: `41793026727`).
     */
    public string $destinationA;
    /**
     * Destination address to which the call will be transferred after successful answering. Address must be in the international format (Example: `41793026727`).
     */
    public string $destinationB;
    /**
     * Numeric sender ID. Will be shown to _destinationA_.
     */
    public string $from;
    /**
     * Numeric sender ID in E.164 format. If set, it will be shown to _destinationB_. If not set, _from_ or _destinationA_ will be shown to _destinationB_, depending on the value of _anonymization_.
     */
    public string $fromB;
    /**
     * If the message is in text format, language in which the message is written must be defined for correct pronunciation. In the Languages section, you can find the list of languages that we support. If not set, default language is `English [en].`
     * Documentation: https://www.infobip.com/docs/voice-and-video/reference#text-to-speech-languages
     */
    public string $language;
    /**
     * Used for enabling detection of answering machine after the call has been answered on `destinationA`. It can be set to `hangup` which means if a machine is detected, the call is hung up. If `machineDetection` is used, there is a minimum of 4 seconds detection time, which can result in delay of playing the message. Answering machine detection is additionally charged. For more information please contact your account manager.
     * Documentation: https://www.infobip.com/docs/voice-and-video/getting-started#answering-machine-detection-add-ons-and-options
     */
    public string $machineDetection;
    /**
     * Maximum duration of transferred call in seconds. If set, when _maxDuration_ is reached call will be terminated.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    /**
     * The ID that uniquely identifies the message sent. It can be defined by you or Infobip will generate unique message ID for this specific call. The field is not mandatory.
     */
    public string $messageId;
    /**
     * Preferred Delivery report content type. Can be `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * Specifies the version of the report model to be sent. Can be `1` ([deprecated version 1](#programmable-communications/voice/receive-voice-delivery-reports-deprecated)) or `2` ([current version 2](#programmable-communications/voice/receive-voice-delivery-reports)). The default is version 2.
     * Format: int32
     */
    public int $notifyContentVersion {
        set {
            $this->assigning('notifyContentVersion', $value);
            $this->notifyContentVersion = $value;
        }
    }
    /**
     * The URL on your callback server on which the Delivery report will be sent.
     */
    public string $notifyUrl;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Retry $retry;
    /**
     * Text of the message that will be played before call transfer. SSML (Speech Synthesis Markup Language) is supported and can be used to fully customize pronunciation of the provided text.
     */
    public string $text;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Voice $voice;
    /**
     * Time before the end of the transferred call, in seconds, when warning beep sound will be played. For example, if _maxDuration_ is set to `60` and warningTime is set to `5`, this means that warning beep will be played on `55.` second of the transferred call, or `5` seconds before it's end.
     * Format: int32
     */
    public int $warningTime {
        set {
            $this->assigning('warningTime', $value);
            $this->warningTime = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'anonymization' => is_bool($value) ? $this->anonymization = $value : parent::assignMember($name, $value),
            'audioFileUrl' => is_string($value) ? $this->audioFileUrl = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'destinationA' => is_string($value) ? $this->destinationA = $value : parent::assignMember($name, $value),
            'destinationB' => is_string($value) ? $this->destinationB = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'fromB' => is_string($value) ? $this->fromB = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'machineDetection' => is_string($value) ? $this->machineDetection = $value : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyContentVersion' => is_int($value) ? $this->notifyContentVersion = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'retry' => $value instanceof \stdClass ? $this->retry = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Retry($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Voice($value) : parent::assignMember($name, $value),
            'warningTime' => is_int($value) ? $this->warningTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
