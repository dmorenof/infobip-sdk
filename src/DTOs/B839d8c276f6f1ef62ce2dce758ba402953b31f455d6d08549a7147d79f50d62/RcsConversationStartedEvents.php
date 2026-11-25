<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsConversationStartedEvents
 */
final class RcsConversationStartedEvents extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'eventCount',
    'pendingEventCount',
    'results',
];

    protected const array VALIDATION = [
    'eventCount' => [
        'format' => 'int32',
    ],
    'pendingEventCount' => [
        'format' => 'int32',
    ],
];

    /**
     * The number of events returned in the results array.
     * Format: int32
     */
    public int $eventCount {
        set {
            $this->assigning('eventCount', $value);
            $this->eventCount = $value;
        }
    }
    /**
     * The number of events that have not been pulled in.
     * Format: int32
     */
    public int $pendingEventCount {
        set {
            $this->assigning('pendingEventCount', $value);
            $this->pendingEventCount = $value;
        }
    }
    /**
     * Collection of conversation started events.
     */
    public \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedEvents\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eventCount' => is_int($value) ? $this->eventCount = $value : parent::assignMember($name, $value),
            'pendingEventCount' => is_int($value) ? $this->pendingEventCount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedEvents\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedEvent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
