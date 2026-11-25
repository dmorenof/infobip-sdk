<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N42b3068683a04f02f0303cd880adeb4415571c6aad33d9a3c6850123c94c9889;

/**
 * VoiceReport
 */
final class VoiceReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'duration' => [
        'format' => 'int32',
    ],
];

    /**
     * Date and time when the voice message was answered. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $answerTime;
    /**
     * The ID that uniquely identifies the bulk of messages.
     */
    public string $bulkId;
    /**
     * Custom data sent over to the notifyUrl.
     */
    public string $callbackData;
    /**
     * Date and time when the Infobip services finished processing the voice message (i.e. delivered to the destination, delivered to the destination network, etc.). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $doneAt;
    /**
     * DTMF code entered by user. Can be empty string, if user did not press anything, or `null` in case of IVR if user did not participate in Collect action.
     */
    public string $dtmfCodes;
    /**
     * DTMF code entered by user, but in JSON form - including DTMF variable names.
     */
    public string $dtmfCodesAsJson;
    /**
     * Duration of the voice message call, in seconds.
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    /**
     * Date and time when the voice message was ended. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $endTime;
    /**
     * Indicates whether the error occurred during the query execution.
     * Documentation: https://www.infobip.com/docs/essentials/api-essentials/response-status-and-error-codes#error-object-example
     */
    public \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Error $error;
    /**
     * Duration of the voice message audio file, in seconds.
     * Format: double
     */
    public float $fileDuration;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    /**
     * Sent voice message price.
     */
    public \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Price $price;
    /**
     * The ID that uniquely identifies the IVR scenario.
     */
    public string $scenarioId;
    /**
     * Name of IVR scenario.
     */
    public string $scenarioName;
    /**
     * Date and time when the voice message was initiated. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $sentAt;
    /**
     * Date and time when the voice message was established and started ringing. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $startTime;
    /**
     * Indicates whether the message is successfully sent, not sent, delivered, not delivered, waiting for delivery or any other possible status.
     * Documentation: https://www.infobip.com/docs/essentials/api-essentials/response-status-and-error-codes#status-object-example
     */
    public \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Status $status;
    /**
     * Destination address of the voice message.
     */
    public string $to;
    /**
     * Url to retrieve call transcription that were made by voice messages with the transcribe feature activated.
     */
    public string $transcribedAudioFileUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answerTime' => is_string($value) ? $this->answerTime = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'dtmfCodes' => is_string($value) ? $this->dtmfCodes = $value : parent::assignMember($name, $value),
            'dtmfCodesAsJson' => is_string($value) ? $this->dtmfCodesAsJson = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Error($value) : parent::assignMember($name, $value),
            'fileDuration' => is_float($value) ? $this->fileDuration = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Price($value) : parent::assignMember($name, $value),
            'scenarioId' => is_string($value) ? $this->scenarioId = $value : parent::assignMember($name, $value),
            'scenarioName' => is_string($value) ? $this->scenarioName = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Status($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'transcribedAudioFileUrl' => is_string($value) ? $this->transcribedAudioFileUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
