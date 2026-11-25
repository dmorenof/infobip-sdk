<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiSeenResult
 *
 * Collection of reports, one per every message.
 */
final class MessagesApiSeenResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkId',
        'channel',
        'destination',
        'event',
        'messageId',
        'seenAt',
        'sender',
        'sentAt',
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
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundSeenChannel $channel;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiContact $contact;
    /**
     * Message destination address.
     */
    public string $destination;
    /**
     * Event type (seen report in this case).
     */
    public string $event;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform $platform;
    /**
     * Tells when the message was seen. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $seenAt;
    /**
     * The sender ID which can be alphanumeric or numeric (e.g., `CompanyName`).
     */
    public string $sender;
    /**
     * Tells when the message was sent. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $sentAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundSeenChannel::from($value) : parent::assignMember($name, $value),
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiContact($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform($value) : parent::assignMember($name, $value),
            'seenAt' => is_string($value) ? $this->seenAt = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
