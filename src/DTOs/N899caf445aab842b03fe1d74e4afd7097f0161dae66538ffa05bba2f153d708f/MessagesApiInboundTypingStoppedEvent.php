<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiInboundTypingStoppedEvent
 */
final class MessagesApiInboundTypingStoppedEvent extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiInboundEvent
{
    public const array REQUIRED_FIELDS = [
    'event',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Value of the `callbackData` field from the MT message (if exists) or from the MO Action setup (if exists).
     */
    public string $callbackData;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundTypingStoppedChannel $channel;
    /**
     * Sender provided during the activation process.
     */
    public string $destination;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * Message ID of the MT message that this MO message is a response to.
     */
    public string $pairedMessageId;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform $platform;
    /**
     * Date and time when Infobip received the message.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * Identifier (usually number) of the party which sent the message.
     */
    public string $sender;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\InboundTypingStoppedChannel::from($value) : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
