<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsInboundMessages
 */
final class RcsInboundMessages extends \Dmorenof\SdkRuntime\DTO
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
     * Collection of mobile originated messages.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundMessages\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundMessages\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundMessage::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
