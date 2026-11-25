<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiIncomingMessageResponse
 */
final class MessagesApiIncomingMessageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'results',
    ];

    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
        'pendingMessageCount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * The number of messages returned in the `results` array.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * The number of messages that have not been pulled in.
     * Format: int32
     */
    public int $pendingMessageCount {
        set {
            $this->assigning('pendingMessageCount', $value);
            $this->pendingMessageCount = $value;
        }
    }
    /**
     * Incoming messages
     */
    public \InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiIncomingMessage\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
