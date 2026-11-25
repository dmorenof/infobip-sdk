<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * Destination
 *
 * An array of destination objects for where messages are being sent. A valid destination is required.
 */
final class ToDestination extends \Dmorenof\SdkRuntime\DTO
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
     * The destination address of the message.
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
