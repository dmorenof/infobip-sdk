<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * VoiceReport
 *
 * Arrays of delivery reports, one object for every message.
 */
final class VoiceReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'duration' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Date and time when the voice message was answered. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
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
     * Date and time when the Infobip services finished processing the voice message (i.e. delivered to the destination, delivered to the destination network, etc.). Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $doneAt;
    /**
     * DTMF code entered by user. Can be empty string, if user did not press anything, or `null` in case of IVR if user did not participate in Collect action.
     */
    public string $dtmfCodes;
    /**
     * Duration of the voice message, in seconds.
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    /**
     * Date and time when the voice message was ended. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $endTime;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceError $error;
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Price $price;
    /**
     * Url to retrieve recorded calls that were made by voice messages with the record feature activated.  Using that URL with GET method will initiate the download of the recorded file. If using a REST testing client, make sure to save the downloaded data instead of displaying it in the client’s response area. Recordings are encoded as PCM WAVE signed little-endian 16bit 8kHz audio files.
     */
    public string $recordedAudioFileUrl;
    /**
     * The ID that uniquely identifies the IVR scenario.
     */
    public string $scenarioId;
    /**
     * Name of IVR scenario.
     */
    public string $scenarioName;
    /**
     * Date and time when the voice message was initiated. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $sentAt;
    /**
     * Date and time when the voice message was established and started ringing. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $startTime;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SingleMessageStatus $status;
    /**
     * Destination address of the voice message.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answerTime' => is_string($value) ? $this->answerTime = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'dtmfCodes' => is_string($value) ? $this->dtmfCodes = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceError($value) : parent::assignMember($name, $value),
            'fileDuration' => is_float($value) ? $this->fileDuration = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Price($value) : parent::assignMember($name, $value),
            'recordedAudioFileUrl' => is_string($value) ? $this->recordedAudioFileUrl = $value : parent::assignMember($name, $value),
            'scenarioId' => is_string($value) ? $this->scenarioId = $value : parent::assignMember($name, $value),
            'scenarioName' => is_string($value) ? $this->scenarioName = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SingleMessageStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
