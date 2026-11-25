<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * To Destination
 *
 * Represents a simple destination.
 */
final class MessagesApiToDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
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

    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId {
        set {
            $this->assigning('messageId', $value);
            $this->messageId = $value;
        }
    }
    /**
     * The destination address of the message. It can be alphanumeric or numeric.
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
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
