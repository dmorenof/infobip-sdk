<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b;

/**
 * VoiceReport
 */
final class VoiceReport extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the bulk of messages.
     */
    public string $bulkId;
    /**
     * Custom data sent over to the notifyUrl.
     */
    public string $callbackData;
    /**
     * Indicates whether the error occurred during the query execution.
     * Documentation: https://www.infobip.com/docs/essentials/api-essentials/response-status-and-error-codes#error-object-example
     */
    public \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Error $error;
    /**
     * The sender ID which can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    /**
     * Sent Voice message price.
     */
    public \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Price $price;
    /**
     * Date and time when the voice message was initiated. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $sentAt;
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
     * Fields representing details specific for voice messages.
     */
    public \InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\VoiceData $voiceCall;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Error($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\A22294a21e0a6f95f3711ca1f29de62bd2ce6d8bf890b9e41dadab263638faaf\Status($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'voiceCall' => $value instanceof \stdClass ? $this->voiceCall = new \InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\VoiceData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
