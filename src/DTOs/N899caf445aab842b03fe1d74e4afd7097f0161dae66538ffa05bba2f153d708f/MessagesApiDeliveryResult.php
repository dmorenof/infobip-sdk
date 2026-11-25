<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiDeliveryResult
 *
 * Incoming Delivery reports.
 */
final class MessagesApiDeliveryResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkId',
        'channel',
        'destination',
        'doneAt',
        'error',
        'event',
        'messageCount',
        'messageId',
        'sender',
        'sentAt',
        'status',
    ];

    protected const array VALIDATION = [
        'mccMnc' => [
            'format' => 'int32',
        ],
        'messageCount' => [
            'format' => 'int32',
        ],
        'networkId' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The ID that uniquely identifies the request.
     */
    public string $bulkId;
    /**
     * Value of the `callbackData` field from the MT message (if exists) or from the MO Action setup (if exists).
     */
    public string $callbackData;
    /**
     * ID of a campaign that was sent in the message.
     */
    public string $campaignReferenceId;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundDlrChannel $channel;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiContact $contact;
    /**
     * Message destination address.
     */
    public string $destination;
    /**
     * Device name if available.
     */
    public string $deviceDetails;
    /**
     * Tells when the message was finished processing by Infobip (ie. delivered to destination, delivered to destination network, etc.). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $doneAt;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDeliveryError $error;
    /**
     * Event type (delivery report in this case).
     */
    public string $event;
    /**
     * Mobile country and network codes.
     * Format: int32
     */
    public int $mccMnc {
        set {
            $this->assigning('mccMnc', $value);
            $this->mccMnc = $value;
        }
    }
    /**
     * The number of parts the message content was split into.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * Network id dependent on Country.
     * Format: int32
     */
    public int $networkId {
        set {
            $this->assigning('networkId', $value);
            $this->networkId = $value;
        }
    }
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform $platform;
    /**
     * The sender ID which can be alphanumeric or numeric (e.g., `CompanyName`).
     */
    public string $sender;
    /**
     * Tells when the message was sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDeliveryStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundDlrChannel::from($value) : parent::assignMember($name, $value),
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiContact($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'deviceDetails' => is_string($value) ? $this->deviceDetails = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDeliveryError($value) : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'mccMnc' => is_int($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'networkId' => is_int($value) ? $this->networkId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDeliveryStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
