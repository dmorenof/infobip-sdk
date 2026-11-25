<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * Channels Destination
 *
 * Represents a destination which can be specified by a `channel`. **It is required for a message failover**.
 */
final class MessagesApiChannelsDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'byChannel',
];

    protected const array VALIDATION = [
    'byChannel' => [
        'minItems' => 1,
    ],
    'messageId' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    /**
     * An array of substitute destinations, each associated with a specific `channel`. Only one substitute destination is allowed per `channel`. A substitute destination must be provided for the main `channel` defined in the `message`.
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiChannelsDestination\ByChannelCollection $byChannel {
        set {
            $this->assigning('byChannel', $value);
            $this->byChannel = $value;
        }
    }
    /**
     * The ID that uniquely identifies the message sent. If failover is defined, then it will override values provided in `byChannel` array and be applied to each message in failover flow.
     */
    public string $messageId {
        set {
            $this->assigning('messageId', $value);
            $this->messageId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'byChannel' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->byChannel = new \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiChannelsDestination\ByChannelCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiChannelDestination::class)) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
