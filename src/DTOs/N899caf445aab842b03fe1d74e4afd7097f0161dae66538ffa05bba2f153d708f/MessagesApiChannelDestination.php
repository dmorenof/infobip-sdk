<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiChannelDestination
 *
 * An array of substitute destinations, each associated with a specific `channel`. Only one substitute destination is allowed per `channel`. A substitute destination must be provided for the main `channel` defined in the `message`.
 */
final class MessagesApiChannelDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'channel',
    'to',
];

    protected const array VALIDATION = [
    'messageId' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'to' => [
        'minLength' => 1,
    ],
];

    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Channel $channel;
    /**
     * The ID that uniquely identifies the message sent.
     *
     * @deprecated
     */
    public string $messageId {
        set {
            $this->assigning('messageId', $value);
            $this->messageId = $value;
        }
    }
    /**
     * The destination address of the message associated with given channel. It can be alphanumeric or numeric.
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Channel::from($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
