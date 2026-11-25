<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiInboundEvent
 *
 * Incoming messages
 */
class MessagesApiInboundEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'event',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'event';
    public const array DISCRIMINATOR_MAPPING = [
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiInboundTypingStartedEvent' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiInboundTypingStartedEvent',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiInboundTypingStoppedEvent' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiInboundTypingStoppedEvent',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMoEvent' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMoEvent',
    'MO' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMoEvent',
    'TYPING_STARTED' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiInboundTypingStartedEvent',
    'TYPING_STOPPED' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiInboundTypingStoppedEvent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiInboundEventType $event;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiInboundEventType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
