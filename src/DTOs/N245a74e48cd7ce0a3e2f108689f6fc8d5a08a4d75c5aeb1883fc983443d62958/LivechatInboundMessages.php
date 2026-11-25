<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LivechatInboundMessages
 */
final class LivechatInboundMessages extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messageCount',
    'pendingMessageCount',
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
     * The number of messages returned in the results array.
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
     * Incoming messages.
     */
    public \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LivechatInboundMessages\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LivechatInboundMessages\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LivechatInboundMessage::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
