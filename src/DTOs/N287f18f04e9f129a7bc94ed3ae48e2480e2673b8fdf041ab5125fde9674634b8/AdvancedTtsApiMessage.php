<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * AdvancedTtsApiMessage
 *
 * Array of messages to be sent, one object per every message
 */
final class AdvancedTtsApiMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
    ];

    protected const array VALIDATION = [
        'callTimeout' => [
            'format' => 'int32',
        ],
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 700,
        ],
        'destinations' => [
            'minItems' => 1,
        ],
        'dtmfTimeout' => [
            'format' => 'int32',
        ],
        'maxDtmf' => [
            'format' => 'int32',
        ],
        'notifyContentVersion' => [
            'format' => 'int32',
        ],
        'pause' => [
            'minimum' => 0,
            'maximum' => 10,
            'format' => 'int32',
        ],
        'ringTimeout' => [
            'format' => 'int32',
        ],
        'validityPeriod' => [
            'minimum' => 1,
            'format' => 'int32',
        ],
    ];

    /**
     * An audio file can be delivered as a voice message to the recipients. An audio file must be uploaded online, so that the existing URL can be available for file download. Size of the audio file must be below 4 MB. Supported formats of the provided file are aac, aiff, m4a, mp2, mp3, mp4 (audio only), ogg, wav and wma. Our platform needs to have permission to make GET and HEAD HTTP requests on the provided URL. Standard http ports (like 80, 8080, etc.) are advised.
     */
    public string $audioFileUrl;
    /**
     * Maximum possible duration of the call to be set, shown in seconds.
     * Format: int32
     */
    public int $callTimeout {
        set {
            $this->assigning('callTimeout', $value);
            $this->callTimeout = $value;
        }
    }
    /**
     * Call transfers object enables transferring the ongoing call to another recipient(s) and establish a communication between your original recipient and additional one.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AdvancedTtsApiMessage\CallTransfersCollection $callTransfers;
    /**
     * Additional client's data that will be sent on the notifyUrl. The maximum value is 700 characters. Example:  `Text containing some additional data needed in Delivery Report`.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * Array of message destination addresses. Maximum number of destination addresses is 20k.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AdvancedTtsApiMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * The waiting period for end user to enter DTMF digits. Default value is `10` seconds.
     * Format: int32
     */
    public int $dtmfTimeout {
        set {
            $this->assigning('dtmfTimeout', $value);
            $this->dtmfTimeout = $value;
        }
    }
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
     * Used for enabling detection of answering machine after the call has been answered. It can be set to `hangup` or `continue`. When set to `hangup`, if a machine is detected call will hang up. When set to `continue`, if a machine is detected, then voice message starts playing into voice mail after the answering message is finished with its greeting. If machineDetection is used, there is a minimum of 4 seconds detection time, which can result in delay of playing the message. Answering machine detection is additionally charged. For more information please contact your account manager and check documentation on Answering Machine Detection.
     * Documentation: https://www.infobip.com/docs/voice-and-video/getting-started#answering-machine-detection-add-ons-and-options
     */
    public string $machineDetection;
    /**
     * Defines the maximum number of DTMF codes entered by end user that would be collected.
     * Format: int32
     */
    public int $maxDtmf {
        set {
            $this->assigning('maxDtmf', $value);
            $this->maxDtmf = $value;
        }
    }
    /**
     * Preferred Delivery report content type. Can be `application/json` or `application/xml`. [Read more](https://www.infobip.com/docs/api#channels/voice/get-voice-delivery-reports).
     */
    public string $notifyContentType;
    /**
     * Specifies the version of the Delivery report to be sent. Can be `1` ([deprecated version 1](#programmable-communications/voice/receive-voice-delivery-reports-deprecated)) or `2` ([current version 2](#programmable-communications/voice/receive-voice-delivery-reports)). The default is version 2. [Read more](https://www.infobip.com/docs/api#channels/voice/get-voice-delivery-reports).
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
    /**
     * Period of time in seconds between end user answering the call and message starting to be played. Minimal value is `0` and maximum value is 10 seconds. Default value is `0`.
     * Format: int32
     */
    public int $pause {
        set {
            $this->assigning('pause', $value);
            $this->pause = $value;
        }
    }
    /**
     * Specify DTMF code that is used as an indicator to repeat the voice message to the end user. The # key cannot be collected, as it is reserved for user input termination. Message can be repeated up to 5 times.
     */
    public string $repeatDtmf;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Retry $retry;
    /**
     * Ringing duration, unless there are no operator limitations. Default value is `45`. Note: There are no limitations on the Voice platform regarding this value, however, most of the operators have their own ring timeout limitations and it is advisable to keep the ringTimeout value up to `45` seconds.
     * Format: int32
     */
    public int $ringTimeout {
        set {
            $this->assigning('ringTimeout', $value);
            $this->ringTimeout = $value;
        }
    }
    /**
     * Used for scheduled Voice messages (message not to be sent immediately, but at scheduled time).
     * Format: date-time
     */
    public string $sendAt;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SendingSpeed $sendingSpeed;
    /**
     * The reproduction speed of speech in the resulting message. Effective only when using text. Supported range is from `0.5` (slow down speech) to `2` (speed up speech). Values less than `0.5` will be replaced with `0.5`, and values higher than `2` will be replaced with `2`. Default value is `1`.
     * Format: double
     */
    public float $speechRate;
    /**
     * Text of the message that will be sent. Message text can be up to 1400 characters long and cannot contain only punctuation. Adding _pauses_ between the words and extending the duration of the voice message is possible by using the comma character `“,”`. For example, if you want to have a 3 second pause after each word, then the text parameter should look like this `“one,,,,,,two,,,,,,three,,,,,,”`. Each comma creates a pause of 0.5 seconds. SSML (_Speech Synthesis Markup Language_) is supported and can be used to fully customize pronunciation of the provided text.
     * Documentation: https://www.infobip.com/docs/voice-and-video/reference#ssml-support-text-to-speech-languages
     */
    public string $text;
    /**
     * The message validity period shown in minutes. When the period expires, it will not be allowed for the message to be sent. A validity period longer than 48h is not supported (in this case, it will be automatically set to 48h).
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Voice $voice;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'audioFileUrl' => is_string($value) ? $this->audioFileUrl = $value : parent::assignMember($name, $value),
            'callTimeout' => is_int($value) ? $this->callTimeout = $value : parent::assignMember($name, $value),
            'callTransfers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->callTransfers = new \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AdvancedTtsApiMessage\CallTransfersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallTransfer::class)) : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\AdvancedTtsApiMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\Destination::class)) : parent::assignMember($name, $value),
            'dtmfTimeout' => is_int($value) ? $this->dtmfTimeout = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'machineDetection' => is_string($value) ? $this->machineDetection = $value : parent::assignMember($name, $value),
            'maxDtmf' => is_int($value) ? $this->maxDtmf = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyContentVersion' => is_int($value) ? $this->notifyContentVersion = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'pause' => is_int($value) ? $this->pause = $value : parent::assignMember($name, $value),
            'repeatDtmf' => is_string($value) ? $this->repeatDtmf = $value : parent::assignMember($name, $value),
            'retry' => $value instanceof \stdClass ? $this->retry = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Retry($value) : parent::assignMember($name, $value),
            'ringTimeout' => is_int($value) ? $this->ringTimeout = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'sendingSpeed' => $value instanceof \stdClass ? $this->sendingSpeed = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SendingSpeed($value) : parent::assignMember($name, $value),
            'speechRate' => is_float($value) ? $this->speechRate = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'voice' => $value instanceof \stdClass ? $this->voice = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Voice($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
