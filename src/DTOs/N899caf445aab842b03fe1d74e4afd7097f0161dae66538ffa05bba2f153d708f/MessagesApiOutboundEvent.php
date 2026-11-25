<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiOutboundEvent
 *
 * Array of event objects of a single event or multiple events sent
 */
class MessagesApiOutboundEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'event',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'event';
    public const array DISCRIMINATOR_MAPPING = [
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiOutboundSeenEvent' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiOutboundSeenEvent',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiOutboundTypingStartedEvent' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiOutboundTypingStartedEvent',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiOutboundTypingStoppedEvent' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiOutboundTypingStoppedEvent',
    'SEEN' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiOutboundSeenEvent',
    'TYPING_STARTED' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiOutboundTypingStartedEvent',
    'TYPING_STOPPED' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiOutboundTypingStoppedEvent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiOutboundEventType $event;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiOutboundEventType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
