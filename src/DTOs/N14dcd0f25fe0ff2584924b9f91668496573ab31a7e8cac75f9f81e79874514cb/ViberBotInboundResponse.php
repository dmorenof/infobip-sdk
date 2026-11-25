<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotInboundResponse
 */
final class ViberBotInboundResponse extends \Dmorenof\SdkRuntime\DTO
{
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
    public \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotInboundResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\InboundMessageViberBotInboundContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
